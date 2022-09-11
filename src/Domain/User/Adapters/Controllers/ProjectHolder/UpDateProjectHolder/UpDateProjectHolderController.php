<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolderRequest;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpDateProjectHolderController
{
    /**
     * @param Request $request
     * @param UpDateProjectHolder $useCase
     * @return JsonResponse
     * @Route(path="/api/projectHolder/update/{id}",name="app_projectHolder_update")
     * @throws Exception
     */
    public function __invoke(Request $request,UpDateProjectHolder $useCase): JsonResponse
    {
        $presenter = new UpDateProjectHolderJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new UpDateProjectHolderRequest((int) $request->get('id'),$data['firstName'], $data['lastName'], $data['email'], $data['password'], null,$data['photo'], $data['bio'],new \DateTime($data['birthday']));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}