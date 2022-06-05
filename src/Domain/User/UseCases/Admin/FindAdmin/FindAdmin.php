<?php


namespace App\Domain\User\UseCases\Admin\FindAdmin;


use App\Domain\User\Entities\AdminRepository;
use App\Domain\User\UseCases\Admin\DeleteAdmin\DeleteAdminRequest;

class FindAdmin
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

    public function execute(FindAdminRequest $request, FindAdminpresenterInterface $presenter)
    {
        $admin = $this->adminRepository->findOne($request->idAdmin);

        $presenter->present($admin);
    }
}