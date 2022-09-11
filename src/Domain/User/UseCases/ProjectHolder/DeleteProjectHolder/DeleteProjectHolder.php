<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;
use App\Domain\User\Entities\Exception\ProjectHolderNotFound;


class DeleteProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    /**
     * @throws ProjectHolderNotFound
     */
    public function execute(DeleteProjectHolderRequest $request, DeleteProjectHolderPresenterInterface $presenter): void {

        $res = $this->projectHolderRepository->remove($request->getId());

        $presenter->present(new DeleteProjectHolderResponse($res));
    }
}