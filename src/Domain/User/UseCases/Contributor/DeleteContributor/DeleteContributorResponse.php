<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


class DeleteContributorResponse
{
    public bool $success;

    /**
     * DeleteProjectHolderResponse constructor.
     * @param $success bool
     */
    function __construct($success)
    {
        $this->success = $success;

    }

}