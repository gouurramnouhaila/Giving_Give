<?php


namespace App\Domain\Don\UseCase;


interface MakeDonationPresenterInterface
{
    /**
     * @param MakeDonationResponse $donationResponse
     * @return mixed
     */
    public function present(MakeDonationResponse $donationResponse);
}