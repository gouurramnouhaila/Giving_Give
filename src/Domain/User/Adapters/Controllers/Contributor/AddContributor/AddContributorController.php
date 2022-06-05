<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\AddContributor;


use App\Domain\User\UseCases\Contributor\AddContributor\AddContributor;
use App\Domain\User\UseCases\Contributor\AddContributor\AddContributorRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddContributorController
{

    /**
     * @param Request $request
     * @param AddContributor $useCase
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     * @Route(path="/contributor/add", name="app_contributor_add", methods={"POST"})
     */
    public function __invoke(Request $request, AddContributor $useCase)
    {
        $presenter = new AddContributorJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new AddContributorRequest($data['id'], $data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['state'], new \DateTime($data['birthDay']));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}