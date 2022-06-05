<?php


namespace App\Domain\Project\UseCase\AcceptProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\Project;
use App\Domain\Project\Entities\ProjectRepository;

class AcceptProject
{
    /**
     * @var  DoctrineProjectRepository $projectRepository;
     */
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $repository)
    {
        $this->projectRepository = $repository;
    }

    /**
     * @param AcceptProjectRequest $request
     * @param AcceptProjectPresenterInterface $presenter
     */
    public function execute(AcceptProjectRequest $request,AcceptProjectPresenterInterface $presenter) {
        $p = $this->projectRepository->find($request->getId());

        if ($p == null) {
            throw new ProjectNotFoundException();
        }

        $project = new Project($p->getId(),$p->getTitle(),$p->getDescription(),$p->getPhoto(),$p->getVideo(),$p->getObjectiveFund(),null,$p->getCategory()->getId());

        $this->projectRepository->accept($project);

        $presenter->present(new AcceptProjectResponse('Project with ID'.$project->getId().' is accepted', 200));

    }
}