<?php


namespace App\Domain\User\UseCases\Admin\DeleteAdmin;


use App\Domain\User\Entities\AdminRepository;

class DeleteAdmin
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

    public function execute(DeleteAdminRequest $request, DeleteAdminPresenterInterface $presenter) {
        $res = $this->adminRepository->remove($request->idAdmin);

        $presenter->present(new DeleteAdminResponse($res));
    }
}