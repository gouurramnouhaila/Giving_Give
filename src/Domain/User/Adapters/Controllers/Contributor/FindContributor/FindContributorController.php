<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindContributor;


use App\Domain\User\UseCases\Contributor\FindContributor\FindContributor;
use App\Domain\User\UseCases\Contributor\FindContributor\FindContributorRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindContributorController
{

    /**
     * @param Request $request
     * @param FindContributor $useCase
     * @return JsonResponse
     * @Route(path="/api/contributors/{id}",name="app_contributor_find",methods={"GET"})
     */
    public function __invoke(Request $request, FindContributor $useCase): JsonResponse
    {
        $presenter = new FindContributorJsonPresenter();

        $requestDto = new FindContributorRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}