<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\UpdateContributor;


use App\Domain\User\UseCases\Contributor\UpDateContributor\UpdateContributor;
use App\Domain\User\UseCases\Contributor\UpDateContributor\UpdateContributorRequest;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpdateContributorController
{
    /**
     * @param Request $request
     * @param UpdateContributor $useCase
     * @Route(path="/api/contributors/update/{id}",name="app_contributor_update",methods={"PUT"})
     * @throws Exception
     */
    public function __invoke(Request $request, UpdateContributor $useCase): JsonResponse
    {
        $presenter = new UpdateContributorJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new UpdateContributorRequest((int)$request->get('id'),$data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['state'],new \DateTime($data['birthDay']));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}