<?php

namespace App\Domain\Don\Adapters\Controllers\MakeDonation;

use App\Domain\Don\Entities\Don;
use App\Domain\Don\UseCases\MakeDonation\MakeDonationPresenterInterface;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;

class MakeDonationJsonPresenter implements MakeDonationPresenterInterface
{
    /**
     * @var int | null
     */
    private ?int $id = null;

    /**
     * @var float | null
     */
    private ?float $amount = null;

    /**
     * @var DateTime | null
     */
    private ?DateTime $dateDonation = null;

    /**
     * @var int | null
     */
    private ?int $idContributor = null;

    /**
     * @var int | null
     */
    private ?int $idProject = null;


    public function present(Don $don): void
    {
        $this->id = $don->getId();
        $this->amount = $don->getAmount();
        $this->idProject = $don->getIdProject();
        $this->idContributor = $don->getIdContributor();
        $this->dateDonation = $don->getDateDonation();
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse (
            [
                'id' => $this->id,
                'amount' => $this->amount,
                'idProject' => $this->idProject,
                'idContributor' => $this->idContributor,
                'dateDonation' => $this->dateDonation
            ]);
    }
}