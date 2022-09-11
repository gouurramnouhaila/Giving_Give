<?php


namespace App\Domain\Project\UseCase\FindProject;

use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;


class FindProject
{
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param FindProjectRequest $request
     * @param FindProjectPresenterInterface $presenter
     * @return void
     */
    public function execute(FindProjectRequest $request,FindProjectPresenterInterface $presenter): void {

        $project = $this->projectRepository->find($request->getId());


        $presenter->present($project);
    }
}