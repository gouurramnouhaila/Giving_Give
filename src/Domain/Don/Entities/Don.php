<?php


namespace App\Domain\Don\Entities;


use DateTime;

class Don
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

    /**
     * @param float | null $amount
     * @param DateTime | null $dateDonation
     * @param int | null $idContributor
     * @param int | null $idProject
     */
    public function __construct(?float $amount, ?DateTime $dateDonation, ?int $idContributor, ?int $idProject)
    {
        $this->amount = $amount;
        $this->dateDonation = $dateDonation;
        $this->idContributor = $idContributor;
        $this->idProject = $idProject;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return DateTime|null
     */
    public function getDateDonation(): ?DateTime
    {
        return $this->dateDonation;
    }

    /**
     * @param DateTime|null $dateDonation
     */
    public function setDateDonation(?DateTime $dateDonation): void
    {
        $this->dateDonation = $dateDonation;
    }

    /**
     * @return int|null
     */
    public function getIdContributor(): ?int
    {
        return $this->idContributor;
    }

    /**
     * @param int|null $idContributor
     */
    public function setIdContributor(?int $idContributor): void
    {
        $this->idContributor = $idContributor;
    }

    /**
     * @return int|null
     */
    public function getIdProject(): ?int
    {
        return $this->idProject;
    }

    /**
     * @param int|null $idProject
     */
    public function setIdProject(?int $idProject): void
    {
        $this->idProject = $idProject;
    }

}