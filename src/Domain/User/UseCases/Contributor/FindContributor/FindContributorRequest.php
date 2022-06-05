<?php


namespace App\Domain\User\UseCases\Contributor\FindContributor;


class FindContributorRequest
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