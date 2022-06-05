<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


class DeleteContributorRequest
{
    public $contributorId;

    /**
     * FindContributorRequest constructor.
     * @param $contributorId
     */
    public function __construct($contributorId)
    {
        $this->contributorId = $contributorId;
    }


}