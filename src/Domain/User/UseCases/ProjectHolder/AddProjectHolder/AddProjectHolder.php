<?php


namespace App\Domain\User\UseCases\ProjectHolder\AddProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;
use App\Domain\User\Entities\ProjectHolder;

class AddProjectHolder
{

    private DoctrineProjectHolderRepository $projectHolderRepository;

    /**
     * AddProjectHolder constructor.
     * @param DoctrineProjectHolderRepository $projectHolderRepository
     */
    public function __construct(DoctrineProjectHolderRepository $projectHolderRepository)
    {
        $this->projectHolderRepository = $projectHolderRepository;
    }


    /**
     * @param AddProjectHolderRequest $request
     * @param AddProjectHolderPresenterInterface $presenter
     */
    public function execute(AddProjectHolderRequest $request, AddProjectHolderPresenterInterface $presenter) {
        $projectHolder =  new ProjectHolder($request->getId(), $request->getFirstName(), $request->getLastName(),$request->getEmail(), $request->getPassword(), $request->getState(),$request->getPhoto(), $request->getBio(),$request->getBirthday());

        $this->projectHolderRepository->add($projectHolder);

        $presenter->present($projectHolder);
    }
}