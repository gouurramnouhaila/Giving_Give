<?php

namespace App\Domain\Don\UseCases\MakeDonation;

use App\Domain\Don\Entities\Don;
use Symfony\Component\HttpFoundation\JsonResponse;

interface MakeDonationPresenterInterface
{
    /**
     * @param Don $don
     * @return void
     */
    public function present(Don $don): void;

    /**
     * @return JsonResponse
     */
    public function getResponse(): JsonResponse;
}