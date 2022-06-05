<?php


namespace App\Domain\Project\UseCase\AcceptProject;


class AcceptProjectRequest
{
    /**
     * @var int
     */
    private int $id;

    /**
     * FindProjectRequest constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}