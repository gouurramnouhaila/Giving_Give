<?php


namespace App\Domain\Don\Entities;


class Don
{
    /**
     * @var float
     */
    private float $amount;

    /**
     * @var \DateTime
     */
    private \DateTime $date;

    /**
     * Don constructor.
     * @param float $amount
     * @param \DateTime $date
     */
    public function __construct(float $amount, \DateTime $date)
    {
        $this->amount = $amount;
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }




}