<?php



namespace App\Domain\Project\Adapters\Controllers\ListProject;



use App\Domain\Project\UseCase\ListProjects\ListProjects;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ListProjectsController
{

    /**
     * @Route(path="/projects",name="app_projects_all")
     */
    public function __invoke(ListProjects $useCase,SerializerInterface $serializer)
    {
        $presenter = new ListProjectJsonPresenter();

        $useCase->execute($presenter);

        return $presenter->getResponse($serializer);
    }
}