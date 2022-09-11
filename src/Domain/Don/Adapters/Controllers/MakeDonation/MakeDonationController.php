<?php

namespace App\Domain\Don\Adapters\Controllers\MakeDonation;

use App\Domain\Don\UseCases\MakeDonation\MakeDonation;
use App\Domain\Don\UseCases\MakeDonation\MakeDonationRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MakeDonationController
{
    /**
     * @return JsonResponse
     * @Route(path="/api/dons/add", name="app_don_add")
     */
    public function __invoke(Request $request, MakeDonation $useCase): JsonResponse
    {
        $presenter = new MakeDonationJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new MakeDonationRequest($data['id'], $data['amount'], $data['dateDonation'], $data['idContributor'], $data['idProject']);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}