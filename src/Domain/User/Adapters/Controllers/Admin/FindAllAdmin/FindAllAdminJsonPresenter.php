<?php


namespace App\Domain\User\Adapters\Controllers\Admin\FindAllAdmin;


use App\Domain\User\UseCases\Admin\FindAllAdmin\FindAllAdminPresenterInterface;
use App\Domain\User\UseCases\Admin\FindAllAdmin\FindAllAdminResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllAdminJsonPresenter implements FindAllAdminPresenterInterface
{
    private $listOfAdmin;

    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     */
    public function present(FindAllAdminResponse $adminResponse): void
    {
        $this->listOfAdmin = $adminResponse->getListOfAdmin();
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'list_of_admin' => $this->serializer->serialize($this->listOfAdmin, 'json')
        ]);
    }
}