<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\AddProjectHolder;



use App\Domain\User\UseCases\ProjectHolder\AddProjectHolder\AddProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\AddProjectHolder\AddProjectHolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddProjectHolderController
{
    /**
     * @Route(path="/projectHolder/add",name="app_projectHolder_add",methods={"POST"})
     */
    public function __invoke(Request $request, AddProjectHolder $addProjectHolder)
    {
        $data = json_decode($request->getContent(), true);

        $requestDto = new AddProjectHolderRequest($data['id'], $data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['state'],$data['photo'], $data['bio'],new \DateTime($data['birthday']));

        $presenter = new AddProjectHolderJsonPresenter();

        $addProjectHolder->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}