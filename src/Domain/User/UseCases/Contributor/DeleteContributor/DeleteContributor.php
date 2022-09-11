<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


use App\Domain\User\Entities\ContributorRepository;

class DeleteContributor
{

    private ContributorRepository $contributorRepository;

    public function __construct(ContributorRepository $contributorRepository)
    {
        $this->contributorRepository = $contributorRepository;
    }

    /**
     * @param DeleteContributorRequest $request
     * @param DeleteContributorPresenterInterface $presenter
     * @return void
     */
    public function execute(DeleteContributorRequest $request, DeleteContributorPresenterInterface $presenter): void {
        $status = $this->contributorRepository->remove($request->getId());

        $presenter->present(new DeleteContributorResponse($status));
    }
}