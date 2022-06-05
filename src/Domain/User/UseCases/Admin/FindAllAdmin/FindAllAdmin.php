<?php


namespace App\Domain\User\UseCases\Admin\FindAllAdmin;


use App\Domain\User\Entities\AdminRepository;

class FindAllAdmin
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

    public function execute(FindAllAdminPresenterInterface $presenter) {
        $listOfAdmin = $this->adminRepository->findAll();

        $presenter->present(new FindAllAdminResponse($listOfAdmin));
    }
}