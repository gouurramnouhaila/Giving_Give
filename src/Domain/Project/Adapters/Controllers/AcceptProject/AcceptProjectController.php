<?php


namespace App\Domain\Project\Adapters\Controllers\AcceptProject;


use App\Domain\Project\UseCase\AcceptProject\AcceptProject;
use App\Domain\Project\UseCase\AcceptProject\AcceptProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AcceptProjectController
{
    /**
     * @Route(path="/api/projects/{id}/accepted",name="app_projects_accepted")
     */
    public function __invoke(Request $request, AcceptProject $useCase): JsonResponse
    {
        $presenter = new AcceptProjectJsonPresenter();

        $requestDto = new AcceptProjectRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}