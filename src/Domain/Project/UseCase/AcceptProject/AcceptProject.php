<?php


namespace App\Domain\Project\UseCase\AcceptProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;


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
     * @return void
     */
    public function execute(AcceptProjectRequest $request,AcceptProjectPresenterInterface $presenter): void {

        $this->projectRepository->accept($request->getId());

        $presenter->present(new AcceptProjectResponse('Project with ID'.$request->getId().' is accepted'));

    }
}