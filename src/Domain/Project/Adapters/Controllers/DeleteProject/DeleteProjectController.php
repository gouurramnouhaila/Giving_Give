<?php


namespace App\Domain\Project\Adapters\Controllers\DeleteProject;


use App\Domain\Project\UseCase\DeleteProject\DeleteProject;
use App\Domain\Project\UseCase\DeleteProject\DeleteProjectRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProjectController
{


    /**
     * @param DeleteProject $useCase
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route(path="/projects/{id}/delete",name="app_project_delete")
     */
    public function __invoke(DeleteProject $useCase, Request $request)
    {
        $presenter = new DeleteProjectJsonPresenter();

        $data = $request->get('id');


        $requestDto = new DeleteProjectRequest(intval($data));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}