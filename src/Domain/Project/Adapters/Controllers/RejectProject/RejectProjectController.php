<?php


namespace App\Domain\Project\Adapters\Controllers\RejectProject;


use App\Domain\Project\UseCase\RejectProject\RejectProject;
use App\Domain\Project\UseCase\RejectProject\RejectProjectRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RejectProjectController
{
    /**
     * @param Request $request
     * @param RejectProject $useCase
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route(path="/projects/{id}/refused",name="app_projects_refused")
     */
    public function __invoke(Request $request, RejectProject $useCase)
    {
        $presenter = new RejectProjectJsonPresenter();
        $id = intval($request->get('id'));

        $requestDto = new RejectProjectRequest($id);
        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();

    }
}