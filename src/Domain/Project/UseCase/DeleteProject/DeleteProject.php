<?php


namespace App\Domain\Project\UseCase\DeleteProject;


use App\Domain\Project\Entities\ProjectRepository;


class DeleteProject
{
    /**
     * @var ProjectRepository
     */
    private ProjectRepository $repository;

    /**
     * DeleteProject constructor.
     * @param ProjectRepository $repository
     */
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(DeleteProjectRequest $request, DeleteProjectPresenterInterface $presenter): void
    {
        $status = $this->repository->delete($request->getId());

        $presenter->present(new DeleteProjectResponse($status));
    }
}