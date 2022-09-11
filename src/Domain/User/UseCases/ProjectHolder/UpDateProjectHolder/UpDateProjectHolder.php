<?php


namespace App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder;



use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;
use App\Domain\User\Entities\ProjectHolder;

class UpDateProjectHolder
{
    private DoctrineProjectHolderRepository $projectHolderRepository;

    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }

    public function execute(UpDateProjectHolderRequest $request,UpDateProjectHolderPresenterInterface $presenter): void {

        $projectHolder =  new ProjectHolder($request->id, $request->firstName, $request->lastName, $request->email, $request->password, $request->state,$request->photo, $request->bio,$request->birthday);

        $this->projectHolderRepository->upDate($projectHolder);

        $presenter->present($projectHolder);
    }
}