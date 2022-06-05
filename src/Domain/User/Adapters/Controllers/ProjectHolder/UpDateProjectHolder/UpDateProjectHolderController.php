<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpDateProjectHolderController
{

    /**
     * @param Request $request
     * @param UpDateProjectHolder $useCase
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route(path="/projectHolder/{id}/update",name="app_projectHolder_update")
     */
    public function __invoke(Request $request,UpDateProjectHolder $useCase)
    {
        $presenter = new UpDateProjectHolderJsonPresenter();

        $data = json_decode($request->getContent(), true);
        $id = intval( $request->get('id'));

        $requestDto = new UpDateProjectHolderRequest( $id,$data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['state'],$data['photo'], $data['bio'],new \DateTime($data['birthday']));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}