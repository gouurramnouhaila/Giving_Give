<?php


namespace App\Domain\User\UseCases\Contributor\FindContributor;


use App\Domain\User\Entities\ContributorRepository;

class FindContributor
{
    private ContributorRepository $contributorRepository;

    /**
     * AddContributor constructor.
     * @param ContributorRepository $contributorRepository
     */
    public function __construct(ContributorRepository $contributorRepository)
    {
        $this->contributorRepository = $contributorRepository;
    }

    public function execute(FindContributorRequest $request, FindContributorPresenterInterface $presenter) {
        $contributor = $this->contributorRepository->findOne($request->contributorId);

        $presenter->present($contributor);
    }
}