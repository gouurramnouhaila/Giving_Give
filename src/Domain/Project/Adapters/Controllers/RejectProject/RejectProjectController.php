<?php


namespace App\Domain\Project\Adapters\Controllers\RejectProject;


use App\Domain\Project\UseCase\RejectProject\RejectProject;
use App\Domain\Project\UseCase\RejectProject\RejectProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RejectProjectController
{
    /**
     * @param Request $request
     * @param RejectProject $useCase
     * @return JsonResponse
     * @Route(path="/api/projects/{id}/refused",name="app_projects_refused")
     */
    public function __invoke(Request $request, RejectProject $useCase): JsonResponse
    {
        $presenter = new RejectProjectJsonPresenter();

        $requestDto = new RejectProjectRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}