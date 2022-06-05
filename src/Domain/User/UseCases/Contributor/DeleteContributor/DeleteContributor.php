<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


use App\Domain\User\Entities\ContributorRepository;

class DeleteContributor
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

    public function execute(DeleteContributorRequest $request, DeleteContributorPresenterInterface $presenter) {
        $res = $this->contributorRepository->remove($request->contributorId);

        $presenter->present(new DeleteContributorResponse($res));
    }
}