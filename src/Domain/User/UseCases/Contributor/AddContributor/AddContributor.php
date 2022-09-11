<?php


namespace App\Domain\User\UseCases\Contributor\AddContributor;


use App\Domain\User\Entities\Contributor;
use App\Domain\User\Entities\ContributorRepository;

class AddContributor
{
    private ContributorRepository $contributorRepository;

    public function __construct(ContributorRepository $contributorRepository)
    {
        $this->contributorRepository = $contributorRepository;
    }

    /**
     * @param AddContributorRequest $request
     * @param AddContributorPresenterInterface $presenter
     * @return void
     */
    public function execute(AddContributorRequest $request, AddContributorPresenterInterface $presenter): void {

        $contributor = new Contributor($request->getId(), $request->getFirstName(), $request->getLastName(), $request->getEmail(), $request->getPassword(), $request->getState(), $request->getBirthday());

        $this->contributorRepository->add($contributor);

        $presenter->present($contributor);
    }
}