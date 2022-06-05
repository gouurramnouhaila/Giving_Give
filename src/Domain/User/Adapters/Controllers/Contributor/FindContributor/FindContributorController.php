<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindContributor;


use App\Domain\User\UseCases\Contributor\FindContributor\FindContributor;
use App\Domain\User\UseCases\Contributor\FindContributor\FindContributorRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindContributorController
{

    /**
     * @param Request $request
     * @param FindContributor $useCase
     * @Route(path="/contributors/{id}",name="app_contributor_find",methods={"GET"})
     */
    public function __invoke(Request $request, FindContributor $useCase)
    {
        $presenter = new FindContributorJsonPresenter();

        $id = intval($request->get('id'));

        $requestDto = new FindContributorRequest($id);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}