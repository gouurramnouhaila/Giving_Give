<?php


namespace App\Domain\Project\Adapters\Controllers\DeleteProject;


use App\Domain\Project\UseCase\DeleteProject\DeleteProject;
use App\Domain\Project\UseCase\DeleteProject\DeleteProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProjectController
{

    /**
     * @Route(path="/api/projects/delete/{id}",name="app_projects_delete")
     */
    public function __invoke(DeleteProject $useCase, Request $request): JsonResponse
    {
        $presenter = new DeleteProjectJsonPresenter();

        $requestDto = new DeleteProjectRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}