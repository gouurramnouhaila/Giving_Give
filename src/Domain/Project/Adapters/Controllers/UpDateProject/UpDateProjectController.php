<?php


namespace App\Domain\Project\Adapters\Controllers\UpDateProject;

use App\Domain\Project\UseCase\UpDateProject\UpDateProject;
use App\Domain\Project\UseCase\UpDateProject\UpDateProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpDateProjectController
{
    /**
     * @param UpDateProject $useCase
     * @param Request $request
     * @return JsonResponse
     * @Route(path="/api/projects/update/{id}",name="app_project_update",methods={"PUT"})
     */
    public function __invoke(UpDateProject $useCase, Request $request): JsonResponse
    {
        $presenter = new UpDateProjectJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new UpDateProjectRequest( (int) $request->get('id') ,$data['title'], $data['description'], $data['photo'], $data['video'], $data['objectiveFund'], $data['projectHolderId'], null, $data['idCategory']);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}