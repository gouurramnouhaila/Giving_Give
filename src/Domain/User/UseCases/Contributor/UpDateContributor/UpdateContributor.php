<?php


namespace App\Domain\User\UseCases\Contributor\UpDateContributor;


use App\Domain\User\Entities\Contributor;
use App\Domain\User\Entities\ContributorRepository;

class UpdateContributor
{
    private ContributorRepository $contributorRepository;

    /**
     * FindAllContributor constructor.
     * @param ContributorRepository $contributorRepository
     */
    public function __construct(ContributorRepository $contributorRepository)
    {
        $this->contributorRepository = $contributorRepository;
    }
    
    public function execute(UpdateContributorRequest $request, UpdateContributorPresenterInterface $presenter) {
        $contributor = $this->contributorRepository->findOne($request->id);
        
        $contributorEntity = new Contributor($request->getId(), $request->getFirstName(), $request->getLastName(), $request->getEmail(), $request->getPassword(), $request->getState(), $request->getBirthday());
        
        $contributorModify = $this->contributorRepository->upDate($contributorEntity);
        
        $presenter->present($contributorEntity);
    }
}