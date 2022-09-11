<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder;


class FindAllProjectHolderResponse
{
    public ?array $projectHolders = null;

    /**
     * @param array|null $projectHolders
     */
    public function __construct(?array $projectHolders)
    {
        $this->projectHolders = $projectHolders;
    }


}