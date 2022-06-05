<?php


namespace App\Domain\User\UseCases\Admin\DeleteAdmin;


class DeleteAdminResponse
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
     * @param $success bool
     */
    function __construct($success)
    {
        $this->success = $success;

    }

}