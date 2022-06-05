<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder;


class FindAllProjectHolderResponse
{
    public $projectHolders;

    public function __construct($projectHolders)
    {
        $this->projectHolders = $projectHolders;
    }
}