<?php


namespace App\Domain\User\UseCases\ProjectHolder\AddProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;
use App\Domain\User\Entities\ProjectHolder;

class AddProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    public function execute(AddProjectHolderRequest $request, AddProjectHolderPresenterInterface $presenter): void {
        $projectHolder =  new ProjectHolder(null, $request->firstName, $request->lastName, $request->email, $request->password, $request->state,$request->photo, $request->bio,$request->birthday);

        $this->projectHolderRepository->add($projectHolder);

        $presenter->present($projectHolder);
    }
}