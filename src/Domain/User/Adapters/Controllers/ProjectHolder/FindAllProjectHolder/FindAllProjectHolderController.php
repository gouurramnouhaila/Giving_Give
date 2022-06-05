<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder;


use App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderJsonPresenter;
use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolder;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllProjectHolderController
{
    /**
     * @Route(path="/projectHolders",name="app_projectHolders_all")
     */
    public function __invoke(FindAllProjectHolder $useCase,SerializerInterface $serializer)
    {
        $presenter = new FindAllProjectHolderJsonPresenter();

        $useCase->execute($presenter);

        return $presenter->getResponse($serializer);
    }
}