<?php

namespace App\Domain\Don\UseCases\MakeDonation;

use DateTime;

class MakeDonationRequest
{
    /**
     * @var int | null
     */
    public ?int $id = null;

    /**
     * @var float | null
     */
    public ?float $amount = null;

    /**
     * @var DateTime | null
     */
    public ?DateTime $dateDonation = null;

    /**
     * @var int | null
     */
    public ?int $idContributor = null;

    /**
     * @var int | null
     */
    public ?int $idProject = null;

    /**
     * @param int | null $id
     * @param float | null $amount
     * @param DateTime | null $dateDonation
     * @param int | null $idContributor
     * @param int | null $idProject
     */
    public function __construct(?int $id, ?float $amount, ?DateTime $dateDonation, ?int $idContributor, ?int $idProject)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->dateDonation = $dateDonation;
        $this->idContributor = $idContributor;
        $this->idProject = $idProject;
    }


}