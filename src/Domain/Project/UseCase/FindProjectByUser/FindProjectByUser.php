<?php

namespace App\Domain\Project\UseCase\FindProjectByUser;

use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;

class FindProjectByUser
{
    private DoctrineProjectRepository $projectRepository;

    public function __construct(DoctrineProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }


    /**
     * @param FindProjectByUserRequest $request
     * @param FindProjectByUserPresenterInterface $presenter
     * @return void
     */
    public function execute(FindProjectByUserRequest $request,FindProjectByUserPresenterInterface $presenter): void {

        $projects = $this->projectRepository->findBy(['projectHolder' => $request->getIdUser()]);

        $presenter->present(new FindProjectByUserResponse($projects));
    }
}