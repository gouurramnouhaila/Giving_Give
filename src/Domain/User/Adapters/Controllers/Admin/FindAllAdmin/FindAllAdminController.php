<?php


namespace App\Domain\User\Adapters\Controllers\Admin\FindAllAdmin;


use App\Domain\User\UseCases\Admin\FindAllAdmin\FindAllAdmin;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllAdminController
{
    /**
     * @param FindAllAdmin $useCase
     * @param SerializerInterface $serializer
     * @return string
     * @Route(path="/admin",name="app_admin_all",methods={"GET"})
     */
    public function __invoke(FindAllAdmin $useCase,SerializerInterface $serializer)
    {
        $presenter = new FindAllAdminJsonPresenter($serializer);

        $useCase->execute($presenter);

        return $presenter->getResponse();
    }
}