<?php


namespace App\Domain\Don\Entities;


interface DonReposirtory
{
    /**
     * @param float $amount
     * @return Don
     */
    public function makeDonation(float $amount): Don;

}