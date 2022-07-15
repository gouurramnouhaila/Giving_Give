<?php


namespace App\Domain\User\UseCases\Contributor\UpDateContributor;


use App\Domain\User\Entities\Contributor;
use App\Domain\User\Entities\ContributorRepository;

class UpdateContributor
{
    /**
     * @var ContributorRepository
     */
    private ContributorRepository $contributorRepository;

    /**
     * @param ContributorRepository $contributorRepository
     */
    public function __construct(ContributorRepository $contributorRepository)
    {
        $this->contributorRepository = $contributorRepository;
    }
    
    public function execute(UpdateContributorRequest $request, UpdateContributorPresenterInterface $presenter): void {

        $contributor = new Contributor($request->id, $request->firstName, $request->lastName, $request->email, $request->password, $request->state, $request->birthday);
        
        $this->contributorRepository->upDate($contributor);
        
        $presenter->present($contributor);
    }
}