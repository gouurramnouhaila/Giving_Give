<?php


namespace App\Domain\Notification\Adapters\Controllers\SendNotification;


use App\Domain\Notification\UseCases\SendNotification\SendNotification;
use App\Domain\Notification\UseCases\SendNotification\SendNotificationRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SendNotificationController
{
    /**
     * @param Request $request
     * @param SendNotification $useCase
     * @Route(path="/notification/send/{id}",name="app_notification_end",methods={"POST"})
     */
    public function __invoke(Request $request, SendNotification $useCase)
    {
        $presenter = new SendNotificationJsonPresenter();

        $requestDto = new SendNotificationRequest($id = intval($request->get('id')));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }
}