<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


class DeleteProjectHolderRequest
{

    private int $idProjectHolder;

    /**
     * @param int $idProjectHolder
     */
    public function __construct(int $idProjectHolder)
    {
        $this->idProjectHolder = $idProjectHolder;
    }

    /**
     * @return int
     */
    public function getIdProjectHolder(): int
    {
        return $this->idProjectHolder;
    }


}