<?php


namespace App\Domain\User\UseCases\Contributor\FindAllContributor;


use App\Domain\User\Entities\ContributorRepository;

class FindAllContributor
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


    public function execute(FindAllContributorPresenterInterface $presenter): void {
        $contributors = $this->contributorRepository->findAll();

        $presenter->present(new FindAllContributorResponse($contributors));
    }

}