<?php

namespace App\Domain\Project\Adapters\Controllers\FindProjectByUser;

use App\Domain\Project\UseCase\FindProjectByUser\FindProjectByUser;
use App\Domain\Project\UseCase\FindProjectByUser\FindProjectByUserRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


class FindProjectByUserController
{
    /**
     * @Route(path="/api/project/user/{id}",name="app_projects_user_find")
     */
    public function __invoke(FindProjectByUser $useCase, Request $request,SerializerInterface $serializer): JsonResponse
    {
        $presenter = new FindProjectByUserJsonPresenter($serializer);


        $requestDto = new FindProjectByUserRequest((int) $request->get('id'));
        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}