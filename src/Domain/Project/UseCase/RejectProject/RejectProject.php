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
     * @param RejectProjectPresenterInterface $presenter

     */
    public function execute(RejectProjectRequest $request, RejectProjectPresenterInterface $presenter) {

        $this->projectRepository->reject($request->getId());
        $presenter->present(new RejectProjectResponse('Project with ID'.$request->getId().' is refused', 200));
    }
}