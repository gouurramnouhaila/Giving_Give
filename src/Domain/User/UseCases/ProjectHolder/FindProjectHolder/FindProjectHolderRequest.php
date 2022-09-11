<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindProjectHolder;


class FindProjectHolderRequest
{
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