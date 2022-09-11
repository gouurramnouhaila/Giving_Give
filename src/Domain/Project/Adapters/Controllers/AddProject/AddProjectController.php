<?php


namespace App\Domain\Project\Adapters\Controllers\AddProject;


use App\Controller\api\ApiController;
use App\Domain\Project\UseCase\AddProject\AddProject;
use App\Domain\Project\UseCase\AddProject\AddProjectRequest;
use App\Form\ProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddProjectController extends ApiController
{
    /**
     * @Route(path="/api/projects/add", name="app_project_add")
     */
    public function __invoke(Request $request, AddProject $useCase): JsonResponse
    {
        $presenter = new AddProjectJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new AddProjectRequest(null, $data['title'],$data['description'], $data['photo'], $data['video'], $data['objectiveFund'], $data['projectHolderId'], null,null);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}