<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


class DeleteContributorRequest
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