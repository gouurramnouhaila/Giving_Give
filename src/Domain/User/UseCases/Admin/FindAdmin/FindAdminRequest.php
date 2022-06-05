<?php


namespace App\Domain\User\UseCases\Admin\FindAdmin;


class FindAdminRequest
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