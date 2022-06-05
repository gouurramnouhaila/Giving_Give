<?php


namespace App\Domain\Project\UseCase\FindProject;


class FindProjectRequest
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