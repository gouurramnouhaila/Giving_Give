<?php


namespace App\Domain\Project\UseCase\DeleteProject;




use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\ProjectRepository;
use Symfony\Component\HttpFoundation\Request;

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


    /**
     * @param DeleteProjectRequest $request
     * @param DeleteProjectPresenterInterface $presenter
     */
    public function execute(DeleteProjectRequest $request, DeleteProjectPresenterInterface $presenter)
    {
        $project = $this->repository->find($request->getIdProject());

        if ($project == null) {
            throw new ProjectNotFoundException();
        }

        $success = $this->repository->delete($project->getId());

        $presenter->present(new DeleteProjectResponse($success));
    }
}