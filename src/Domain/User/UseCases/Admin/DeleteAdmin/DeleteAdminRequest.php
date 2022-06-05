<?php


namespace App\Domain\User\UseCases\Admin\DeleteAdmin;


class DeleteAdminRequest
{
    public $idAdmin;

    /**
     * DeleteAdminRequest constructor.
     * @param $idAdmin
     */
    public function __construct($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    }


}