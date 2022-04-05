<?php


namespace App\Domain\Don\UseCase;


class MakeDonationResponse
{
    /**
     * @var float
     */
    private float $don;

    /**
     * MakeDonationResponse constructor.
     * @param float $don
     */
    public function __construct(float $don)
    {
        $this->don = $don;
    }


}