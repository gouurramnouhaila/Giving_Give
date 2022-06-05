<?php


namespace App\Domain\User\UseCases\Admin\FindAllAdmin;


class FindAllAdminResponse
{
    private $listOfAdmin;

    /**
     * FindAllAdminResponse constructor.
     * @param $listOfAdmin
     */
    public function __construct($listOfAdmin)
    {
        $this->listOfAdmin = $listOfAdmin;
    }

    /**
     * @return mixed
     */
    public function getListOfAdmin()
    {
        return $this->listOfAdmin;
    }

    /**
     * @param mixed $listOfAdmin
     */
    public function setListOfAdmin($listOfAdmin): void
    {
        $this->listOfAdmin = $listOfAdmin;
    }




}