<?php


namespace App\Domain\Project\Adapters\Controllers\AddProject;


use App\Domain\Project\UseCase\AddProject\AddProject;
use App\Domain\Project\UseCase\AddProject\AddProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddProjectController
{
    /**
     * @Route(path="/api/projects/add", name="app_project_add")
     */
    public function __invoke(Request $request, AddProject $useCase): JsonResponse
    {
        $presenter = new AddProjectJsonPresenter();
        $data = json_decode($request->getContent(), true);

        $requestDto = new AddProjectRequest(null, $data['title'],$data['description'], $data['photo'], $data['video'], $data['objectiveFund'], $data['projectHolderId'], null,$data['idCategory']);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}