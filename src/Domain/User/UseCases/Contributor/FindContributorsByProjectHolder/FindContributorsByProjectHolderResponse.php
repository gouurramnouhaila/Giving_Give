<?php

namespace App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder;

class FindContributorsByProjectHolderResponse
{
    /**
     * @var array|null
     */
    private ?array $contributors = null;

    /**
     * @param array|null $contributors
     */
    public function __construct(?array $contributors)
    {
        $this->contributors = $contributors;
    }

    /**
     * @return array|null
     */
    public function getContributors(): ?array
    {
        return $this->contributors;
    }

    /**
     * @param array|null $contributors
     */
    public function setContributors(?array $contributors): void
    {
        $this->contributors = $contributors;
    }
}