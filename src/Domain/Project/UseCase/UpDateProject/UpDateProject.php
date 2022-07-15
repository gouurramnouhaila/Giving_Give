<?php


namespace App\Domain\Project\UseCase\UpDateProject;

use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\Project;

class UpDateProject
{
    /**
     * @var DoctrineProjectRepository
     */
    private DoctrineProjectRepository $projectRepository;

    /**
     * @param DoctrineProjectRepository $repository
     */
    public function __construct(DoctrineProjectRepository $repository)
    {
        $this->projectRepository = $repository;

    }

    /**
     * @param UpDateProjectRequest $request
     * @param UpDateProjectPresenterInterface $presenter
     * @return void
     * @throws ProjectNotFoundException
     */
    public function execute(UpDateProjectRequest $request,UpDateProjectPresenterInterface $presenter): void {

        $project = new Project($request->id, $request->title, $request->description, $request->photo,$request->video, $request->objectiveFund, $request->objectiveFund, $request->idCategory);

        $this->projectRepository->update($project);

        $presenter->present($project);
    }
}