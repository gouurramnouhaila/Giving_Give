<?php


namespace App\Domain\Project\UseCase\ListProjects;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;

class ListProjects
{
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function execute(ListProjectsPresenterInterface $presenter) {

        $projects = $this->projectRepository->findAll();
        $response = new ListProjectsResponse($projects);

        $presenter->present($response);
    }
}