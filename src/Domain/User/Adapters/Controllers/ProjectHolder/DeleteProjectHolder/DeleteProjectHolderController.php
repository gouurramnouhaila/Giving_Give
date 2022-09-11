<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\DeleteProjectHolder;


use App\Domain\Project\UseCase\DeleteProject\DeleteProject;
use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProjectHolderController
{
    /**
     * @param DeleteProjectHolder $useCase
     * @param Request $request
     * @return JsonResponse
     * @Route(path="/api/projectHolder/delete/{id}",name="app_project_delete")
     */
    public function __invoke(DeleteProjectHolder $useCase, Request $request): JsonResponse
    {
        $presenter = new DeleteProjectHolderJsonPresenter();

        $requestDto = new DeleteProjectHolderRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}