<?php


namespace App\Domain\User\Adapters\Controllers\Admin\AddAdmin;


use App\Domain\User\UseCases\Admin\AddAdmin\AddAdmin;
use App\Domain\User\UseCases\Admin\AddAdmin\AddAdminRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddAdminController
{
    /**
     * @param Request $request
     * @param AddAdmin $useCase
     * @Route(path="/admin/add", name="app_admin_add",methods={"POST"})
     */
    public function __invoke(Request $request, AddAdmin $useCase)
    {
        $presenter = new AddAdminJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new AddAdminRequest($data['id'], $data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['verify']);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}