<?php


namespace App\Domain\User\Adapters\Controllers\Admin\FindAdmin;


use App\Domain\User\UseCases\Admin\FindAdmin\FindAdmin;
use App\Domain\User\UseCases\Admin\FindAdmin\FindAdminRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindAdminController
{
    /**
     * @param Request $request
     * @param FindAdmin $useCase
     * @Route(path="/admin/{id}",name="app_admin_find", methods={"GET"})
     */
    public function __invoke(Request $request, FindAdmin $useCase)
    {
        $presenter = new FindAdminJsonPresenter();

        $requestDto = new FindAdminRequest(intval($request->get('id')));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}