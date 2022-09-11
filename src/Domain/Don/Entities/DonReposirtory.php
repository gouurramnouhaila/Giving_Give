<?php


namespace App\Domain\Don\Entities;


interface DonReposirtory
{
    /**
     * @param Don $don
     * @return Don
     */
    public function makeDonation(Don $don): Don;

}