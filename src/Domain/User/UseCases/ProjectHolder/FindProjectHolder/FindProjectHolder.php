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

    public function execute(FindProjectHolderRequest $request, FindProjectHolderPresenterInterface $presenter)
    {
        $projectHolder = $this->projectHolderRepository->find($request->idProjectHolder);

        $presenter->present($projectHolder);
    }
}