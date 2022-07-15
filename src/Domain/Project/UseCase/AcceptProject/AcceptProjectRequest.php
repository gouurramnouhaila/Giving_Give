<?php


namespace App\Domain\Project\UseCase\AcceptProject;


class AcceptProjectRequest
{
    /**
     * @var int|null
     */
    private ?int $id = null;

    /**
     * @param int|null $id
     */
    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}