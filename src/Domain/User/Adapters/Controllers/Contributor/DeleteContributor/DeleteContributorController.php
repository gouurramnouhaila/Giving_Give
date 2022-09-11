<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\DeleteContributor;


use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributor;
use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributorRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteContributorController
{
    /**
     * @param Request $request
     * @param DeleteContributor $useCase
     * @return JsonResponse
     * @Route(path="api/contributors/delete/{id}",name="app_contributor_remove",methods={"DELETE"})
     */
    public function __invoke(Request $request,DeleteContributor $useCase): JsonResponse
    {
        $presenter = new DeleteContributorJsonPresenter();

        $requestDto = new DeleteContributorRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}