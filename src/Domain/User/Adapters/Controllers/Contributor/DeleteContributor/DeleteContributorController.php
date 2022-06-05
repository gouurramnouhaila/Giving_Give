<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\DeleteContributor;


use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributor;
use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributorRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteContributorController
{
    /**
     * @param Request $request
     * @param DeleteContributor $useCase
     * @Route(path="/contributors/remove/{id}",name="app_contributor_remove",methods={"DELETE"})
     */
    public function __invoke(Request $request,DeleteContributor $useCase)
    {
        $presenter = new DeleteContributorJsonPresenter();

        $id = intval($request->get('id'));

        $requestDto = new DeleteContributorRequest($id);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}