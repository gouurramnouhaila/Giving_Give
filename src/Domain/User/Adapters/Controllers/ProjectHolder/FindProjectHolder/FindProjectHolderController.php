<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\FindProjectHolder\FindProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\FindProjectHolder\FindProjectHolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindProjectHolderController
{
    /**
     * @param Request $request
     * @param FindProjectHolder $useCase
     *  @Route(path="/projectHolders/{id}",name="app_project_find")
     */
    public function __invoke(Request $request, FindProjectHolder $useCase)
    {
        $presenter = new FindProjectHolderJsonPresenter();

        $data = $request->get('id');

        $requestDto = new FindProjectHolderRequest(intval($data));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}