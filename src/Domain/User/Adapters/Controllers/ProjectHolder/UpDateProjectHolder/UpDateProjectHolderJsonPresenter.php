<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\Entities\ProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolderPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\Header\TagHeader;

class UpDateProjectHolderJsonPresenter implements UpDateProjectHolderPresenterInterface
{

    private  $id;

    private  $firstName;

    private  $lastName;

    private  $email;

    private  $password;

    private  $state;

    private  $photo;

    private  $bio;

    private $birthday;


    /**
     * @inheritDoc
     */
    public function present(ProjectHolder $upDateProjectResponse): void
    {
        $this->id = $upDateProjectResponse->getId();
        $this->firstName = $upDateProjectResponse->getFirstName();
        $this->lastName = $upDateProjectResponse->getLastName();
        $this->email = $upDateProjectResponse->getEmail();
        $this->password = $upDateProjectResponse->getPassword();
        $this->state = $upDateProjectResponse->getState();
        $this->photo = $upDateProjectResponse->getPhoto();
        $this->bio = $upDateProjectResponse->getBio();
        $this->birthday = $upDateProjectResponse->getBirthday();
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse (
            [
                'id' => $this->id,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'password' => $this->password,
                'state' => $this->state,
                'photo' => $this->photo,
                'bio' => $this->bio,
                'birthday' => $this->birthday
            ]
        );
    }
}