<?php


namespace App\Domain\User\Adapters\Controllers\Admin\UpdateAdmin;


use App\Domain\User\Entities\Admin;
use App\Domain\User\UseCases\Admin\UpdateAdmin\UpdateAdminPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class UpdateAdminJsonPresenter implements UpdateAdminPresenterInterface
{

    public  $id;

    public  $firstName;

    public  $lastName;

    public  $email;

    public  $password;

    public  $verify;

    /**
     * @inheritDoc
     */
    public function present(Admin $admin): void
    {
        $this->firstName = $admin->getFirstName();
        $this->lastName = $admin->getLastName();
        $this->email = $admin->getEmail();
        $this->password = $admin->getPassword();
        $this->verify = $admin->isVerify();
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'verify' => $this->verify
        ]);
    }
}