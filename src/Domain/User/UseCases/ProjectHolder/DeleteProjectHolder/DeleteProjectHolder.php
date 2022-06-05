<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;


class DeleteProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    /**
     * @param DeleteProjectHolderRequest $request
     * @param DeleteProjectHolderPresenterInterface $presenter
     */
    public function execute(DeleteProjectHolderRequest $request, DeleteProjectHolderPresenterInterface $presenter) {

        $res = $this->projectHolderRepository->remove($request->getIdProjectHolder());

        $presenter->present(new DeleteProjectHolderResponse($res));
    }
}