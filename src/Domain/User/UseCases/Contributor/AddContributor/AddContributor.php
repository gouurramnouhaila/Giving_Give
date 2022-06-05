<?php


namespace App\Domain\User\UseCases\Contributor\AddContributor;


use App\Domain\User\Entities\Contributor;
use App\Domain\User\Entities\ContributorRepository;

class AddContributor
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


    public function execute(AddContributorRequest $request, AddContributorPresenterInterface $presenter) {

        $contributor = new Contributor($request->getId(), $request->getFirstName(), $request->getLastName(), $request->getEmail(), $request->getPassword(), $request->getState(), $request->getBirthday());

        $this->contributorRepository->add($contributor);

        $presenter->present($contributor);
    }
}