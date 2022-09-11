<?php

namespace App\Domain\Don\UseCases\MakeDonation;

use App\Domain\Don\Adapters\Gateway\Doctrine\DoctrineDonRepository;
use App\Domain\Don\Entities\Don;

class MakeDonation
{
    private DoctrineDonRepository $doctrineDonRepository;

    /**
     * @param DoctrineDonRepository $doctrineDonRepository
     */
    public function __construct(DoctrineDonRepository $doctrineDonRepository)
    {
        $this->doctrineDonRepository = $doctrineDonRepository;
    }

    public function execute(MakeDonationRequest $request, MakeDonationPresenterInterface $presenter): void
    {
        $don = new Don($request->amount, new \DateTime(), $request->idContributor, $request->idProject);
        $this->doctrineDonRepository->makeDonation($don);

        $presenter->present($don);
    }


}