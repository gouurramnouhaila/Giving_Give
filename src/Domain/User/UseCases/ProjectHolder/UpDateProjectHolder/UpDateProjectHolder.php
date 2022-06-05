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

    public function execute(UpDateProjectHolderRequest $request,UpDateProjectHolderPresenterInterface $presenter) {
        $projectHolder = $this->projectHolderRepository->find($request->getId());

        $projectHolderEntity = new ProjectHolder($projectHolder->getId(), $request->getFirstName(), $request->getLastName(),$request->getEmail(), $request->getPassword(), $request->getState(), $request->getPhoto(), $request->getBio(),$request->getBirthday());

        $projectHolderModify = $this->projectHolderRepository->upDate($projectHolderEntity);

        $presenter->present($projectHolderEntity);
    }
}