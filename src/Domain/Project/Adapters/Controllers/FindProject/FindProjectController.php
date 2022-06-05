<?php


namespace App\Domain\Project\Adapters\Controllers\FindProject;


use App\Domain\Project\UseCase\FindProject\FindProject;
use App\Domain\Project\UseCase\FindProject\FindProjectRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindProjectController
{
    /**
     * @Route(path="/projects/{id}",name="app_projects_find")
     */
    public function __invoke(FindProject $useCase, Request $request)
    {
        $presenter = new FindProjectJsonPresenter();

        $id = intval($request->get('id'));
        $requestDto = new FindProjectRequest($id);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}