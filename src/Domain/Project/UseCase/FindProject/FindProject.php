<?php


namespace App\Domain\Project\UseCase\FindProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Project;

class FindProject
{
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function execute(FindProjectRequest $request,FindProjectPresenterInterface $presenter) {

        $p = $this->projectRepository->find($request->getId());

        $project = new Project($p->getTitle(),$p->getDescription(),$p->getPhoto(),$p->getVideo(),$p->getObjectiveFund(),null,$p->getCategory()->getId());
        $project->setId($p->getId());

        $presenter->present($project);
    }
}