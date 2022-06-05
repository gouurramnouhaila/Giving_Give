<?php


namespace App\Domain\User\UseCases\Admin\UpdateAdmin;


use App\Domain\User\Entities\Admin;
use App\Domain\User\Entities\AdminRepository;

class UpdateAdmin
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


    public function execute(UpdateAdminRequest $request, UpdateAdminPresenterInterface $presenter) {
        $adminDoctrine = $this->adminRepository->findOne($request->id);

        $adminEntity = new Admin($request->id, $request->firstName, $request->lastName, $request->email, $request->password, $request->verify);

        $this->adminRepository->upDate($adminEntity);

        $presenter->present($adminEntity);
    }
}