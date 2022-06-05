<?php


namespace App\Domain\User\UseCases\Admin\AddAdmin;


use App\Domain\User\Entities\Admin;
use App\Domain\User\Entities\AdminRepository;

class AddAdmin
{
    private AdminRepository $adminRepository;

    /**
     * AddAdmin constructor.
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function execute(AddAdminRequest $request, AddAdminPresenterInterface $presenter) {
        $admin = new Admin($request->firstName, $request->lastName, $request->email, $request->password, $request->verify);

        $this->adminRepository->add($admin);

        $presenter->present($admin);
    }


}