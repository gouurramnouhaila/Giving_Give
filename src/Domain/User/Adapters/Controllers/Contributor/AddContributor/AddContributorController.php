<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\AddContributor;


use App\Domain\User\UseCases\Contributor\AddContributor\AddContributor;
use App\Domain\User\UseCases\Contributor\AddContributor\AddContributorRequest;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddContributorController
{

    /**
     * @param Request $request
     * @param AddContributor $useCase
     * @return JsonResponse
     * @throws Exception
     * @Route(path="/api/contributor/add", name="app_contributor_add", methods={"POST"})
     */
    public function __invoke(Request $request, AddContributor $useCase): JsonResponse
    {
        $presenter = new AddContributorJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new AddContributorRequest(null, $data['firstName'], $data['lastName'], $data['email'], $data['password'], null, new \DateTime($data['birthday']));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}