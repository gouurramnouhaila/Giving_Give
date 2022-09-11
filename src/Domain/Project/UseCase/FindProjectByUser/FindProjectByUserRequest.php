<?php

namespace App\Domain\Project\UseCase\FindProjectByUser;

class FindProjectByUserRequest
{
    /**
     * @var int|null
     */
    private ?int $idUser = null;

    /**
     * @param int|null $idUser
     */
    public function __construct(?int $idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return int|null
     */
    public function getIdUser(): ?int
    {
        return $this->idUser;
    }




}