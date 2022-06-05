<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindProjectHolder;


class FindProjectHolderRequest
{

    public $idProjectHolder;

    public function __construct($idProjectHolder)
    {
        $this->idProjectHolder = $idProjectHolder;
    }
}