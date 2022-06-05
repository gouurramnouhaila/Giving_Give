<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


class DeleteProjectHolderResponse
{
    public $success;

    public function getSuccess()
    {
        return $this->success;
    }


    public function setSuccess($success): void
    {
        $this->success = $success;
    }


    /**
     * DeleteProjectHolderResponse constructor.
     * @param $success bool
     */
    function __construct($success)
    {
        $this->success = $success;

    }


}