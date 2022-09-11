<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\AddProjectHolder;



use App\Domain\User\UseCases\ProjectHolder\AddProjectHolder\AddProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\AddProjectHolder\AddProjectHolderRequest;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddProjectHolderController
{
    /**
     * @Route(path="/api/projectHolder/add",name="app_projectHolder_add",methods={"POST"})
     * @throws Exception
     */
    public function __invoke(Request $request, AddProjectHolder $addProjectHolder): JsonResponse
    {
        $presenter = new AddProjectHolderJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new AddProjectHolderRequest(null, $data['firstName'], $data['lastName'], $data['email'], $data['password'], null,$data['photo'], $data['bio'],new \DateTime($data['birthday']));

        $addProjectHolder->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}