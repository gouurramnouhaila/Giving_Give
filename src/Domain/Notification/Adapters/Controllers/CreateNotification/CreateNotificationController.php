<?php


namespace App\Domain\Notification\Adapters\Controllers\CreateNotification;


use App\Domain\Notification\UseCases\createNotification\CreateNotification;
use App\Domain\Notification\UseCases\createNotification\CreateNotificationRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CreateNotificationController
{
    /**
     * @param CreateNotification $useCase
     * @param Request $request
     * @Route(path="/notification/create", name="app_notification_create",methods={"POST"})
     */
    public function __invoke(CreateNotification $useCase, Request $request)
    {
        $presenter = new CreateNotificationJsonPresenter();

        $data = json_decode($request->getContent(), true);

        $requestDto = new CreateNotificationRequest($data['id'], $data['content'], new \DateTime($data['notifyDate']), new \DateTime($data['readingDate']),$data['isRead'],$data['subject'],$data['idContributor']);
     
        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}