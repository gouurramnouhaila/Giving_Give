<?php


namespace App\Domain\User\Adapters\Controllers\Admin\DeleteAdmin;


use App\Domain\User\UseCases\Admin\DeleteAdmin\DeleteAdmin;
use App\Domain\User\UseCases\Admin\DeleteAdmin\DeleteAdminRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteAdminController
{
    /**
     * @param Request $request
     * @param DeleteAdmin $useCase
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route(path="/admin/delete/{id}", name="app_admin/delete", methods={"DELETE"})
     */
    public function __invoke(Request $request, DeleteAdmin $useCase)
    {
        $presenter = new DeleteAdminJsonPresenter();

        $requestDto = new DeleteAdminRequest(intval($request->get('id')));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}