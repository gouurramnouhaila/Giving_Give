<?php


namespace App\Domain\User\UseCases\Admin\UpdateAdmin;


class UpdateAdminRequest
{
    public  $id;

    public  $firstName;

    public  $lastName;

    public  $email;

    public  $password;

    public  $verify;

    /**
     * AddAdminRequest constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     * @param $verify
     */
    public function __construct($id, $firstName, $lastName, $email, $password, $verify)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->verify = $verify;
    }

}