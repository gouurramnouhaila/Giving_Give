<?php

namespace App\Domain\User\UseCases\Contributor\FindAllContributor;

class FindAllContributorsRequest
{
    private ?int $projectHolderId = null;

    /**
     * @param int|null $projectHolderId
     */
    public function __construct(?int $projectHolderId)
    {
        $this->projectHolderId = $projectHolderId;
    }

    /**
     * @return int|null
     */
    public function getProjectHolderId(): ?int
    {
        return $this->projectHolderId;
    }




}