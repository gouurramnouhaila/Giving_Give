<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;

class FindProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    public function execute(FindProjectHolderRequest $request, FindProjectHolderPresenterInterface $presenter): void
    {
        $projectHolder = $this->projectHolderRepository->findOne($request->getId());

        $presenter->present($projectHolder);
    }
}