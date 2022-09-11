<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\FindProjectHolder\FindProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\FindProjectHolder\FindProjectHolderRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FindProjectHolderController
{
    /**
     * @param Request $request
     * @param FindProjectHolder $useCase
     * @return JsonResponse
     * @Route(path="/api/projectHolder/{id}",name="app_project_find")
     */
    public function __invoke(Request $request, FindProjectHolder $useCase): JsonResponse
    {
        $presenter = new FindProjectHolderJsonPresenter();

        $requestDto = new FindProjectHolderRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}