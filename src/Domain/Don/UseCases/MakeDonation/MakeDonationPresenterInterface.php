<?php


namespace App\Domain\Don\UseCase;


interface MakeDonationPresenterInterface
{
    /**
     * @param MakeDonationResponse $donationResponse
     * @return mixed
     */
    public function present(MakeDonationResponse $donationResponse);

    /**
     * @return mixed
     *
     * create and return vm
     */
    public function getResponse();
}