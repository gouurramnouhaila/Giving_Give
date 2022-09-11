<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder;


use App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderJsonPresenter;
use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolder;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllProjectHolderController
{

    /**
     * @Route(path="/api/projectHolders",name="app_projectHolders_all")
     */
    public function __invoke(FindAllProjectHolder $useCase,SerializerInterface $serializer): JsonResponse
    {
        $presenter = new FindAllProjectHolderJsonPresenter($serializer);

        $useCase->execute($presenter);

        return $presenter->getResponse();
    }
}