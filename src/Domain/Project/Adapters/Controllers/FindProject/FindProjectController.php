<?php


namespace App\Domain\Project\Adapters\Controllers\FindProject;


use App\Domain\Project\UseCase\FindProject\FindProject;
use App\Domain\Project\UseCase\FindProject\FindProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindProjectController
{
    /**
     * @Route(path="/api/projects/{id}",name="app_projects_find")
     */
    public function __invoke(FindProject $useCase, Request $request): JsonResponse
    {
        $presenter = new FindProjectJsonPresenter();

        $requestDto = new FindProjectRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}