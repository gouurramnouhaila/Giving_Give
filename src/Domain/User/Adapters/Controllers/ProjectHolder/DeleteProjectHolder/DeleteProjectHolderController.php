<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\DeleteProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProjectHolderController
{
    /**
     * @param DeleteProject $useCase
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route(path="/projectHolder/{id}/delete",name="app_project_delete")
     */
    public function __invoke(DeleteProjectHolder $useCase, Request $request)
    {
        $presenter = new DeleteProjectHolderJsonPresenter();

        $data = $request->get('id');


        $requestDto = new DeleteProjectHolderRequest(intval($data));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}