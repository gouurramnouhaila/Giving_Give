<?php


namespace App\Domain\User\UseCases\Contributor\FindContributor;


use App\Domain\User\Entities\ContributorRepository;

class FindContributor
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

    public function execute(FindContributorRequest $request, FindContributorPresenterInterface $presenter): void {
        $contributor = $this->contributorRepository->findOne($request->getId());

        $presenter->present($contributor);
    }
}