<?php

namespace App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder;

class FindContributorsByProjectHolderRequest
{
    public int $idProjectHolder;

    /**
     * @param int $idProjectHolder
     */
    public function __construct(int $idProjectHolder)
    {
        $this->idProjectHolder = $idProjectHolder;
    }
}