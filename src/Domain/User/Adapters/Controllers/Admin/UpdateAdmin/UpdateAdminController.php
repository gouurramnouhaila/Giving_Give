<?php


namespace App\Domain\User\Adapters\Controllers\Admin\UpdateAdmin;


use App\Domain\User\UseCases\Admin\UpdateAdmin\UpdateAdmin;
use App\Domain\User\UseCases\Admin\UpdateAdmin\UpdateAdminRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpdateAdminController
{
    /**
     * @param Request $request
     * @param UpdateAdmin $useCase
     * @Route(path="/admin/update/{id}",name="app_admin_update", methods={"POST"})
     */
    public function __invoke(Request $request, UpdateAdmin $useCase)
    {
        $presenter = new UpdateAdminJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new UpdateAdminRequest(intval( $request->get('id')),$data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['verify']);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}