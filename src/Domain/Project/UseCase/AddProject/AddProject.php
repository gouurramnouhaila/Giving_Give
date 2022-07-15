<?php


namespace App\Domain\Project\UseCase\AddProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineCategoryRepository;
use App\Domain\Project\Entities\Project;
use App\Domain\Project\Entities\ProjectRepository;
use App\Domain\Project\UseCase\Gateway\ProjectFactory;

class AddProject
{
    /**
     * @var ProjectRepository
     */
    private ProjectRepository $repository;


    /**
     * AddProject constructor.
     * @param ProjectRepository $repository */
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param AddProjectRequest $request
     * @param AddProjectPresenterInterface $presenter
     */
    public function execute(AddProjectRequest $request, AddProjectPresenterInterface $presenter): void {

        $project = new Project($request->id, $request->title, $request->description, $request->photo, $request->video,$request->objectiveFund, $request->projectHolderId, $request->idCategory);

        $this->repository->add($project);

        $presenter->present($project);
    }
}