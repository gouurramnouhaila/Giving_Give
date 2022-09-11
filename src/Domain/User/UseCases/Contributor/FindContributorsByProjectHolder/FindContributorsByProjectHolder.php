<?php

namespace App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder;

use App\Domain\User\Entities\ContributorRepository;


class FindContributorsByProjectHolder
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

    public function execute(FindContributorsByProjectHolderRequest $request, FindContributorsByProjectHolderPresenterInterface $presenter): void {
        $contributors = $this->contributorRepository->findContributorByProjectHolder($request->idProjectHolder);

        $presenter->present(new FindContributorsByProjectHolderResponse($contributors));
    }
}