<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;


class FindAllProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    public function execute(FindAllProjectHolderPresenterInterface $presenter)
    {
        $projectHolders = $this->projectHolderRepository->findAll();

        $presenter->present(new FindAllProjectHolderResponse($projectHolders));
    }
}