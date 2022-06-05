<?php


namespace App\Domain\Project\UseCase\RejectProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\Project;

class RejectProject
{
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param RejectProjectRequest $request
     * @param RejectProjectPresenterInterface $presenterà
     */
    public function execute(RejectProjectRequest $request, RejectProjectPresenterInterface $presenter) {
        $p = $this->projectRepository->find($request->getId());

        if ($p == null) {
            throw new ProjectNotFoundException();
        }

        $project = new Project($p->getId(),$p->getTitle(),$p->getDescription(),$p->getPhoto(),$p->getVideo(),$p->getObjectiveFund(),null,$p->getCategory()->getId());

        $this->projectRepository->reject($project);

        $presenter->present(new RejectProjectResponse('Project with ID'.$project->getId().' is refused', 200));

    }
}