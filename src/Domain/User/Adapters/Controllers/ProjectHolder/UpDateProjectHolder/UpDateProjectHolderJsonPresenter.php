<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\Entities\ProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder\UpDateProjectHolderPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class UpDateProjectHolderJsonPresenter implements UpDateProjectHolderPresenterInterface
{
    private ?int $id = null;

    private ?string $firstName = null;

    private ?string $lastName = null;

    private ?string $email = null;

    private ?string $password = null;

    private ?string $state = null;

    private ?string $photo = null;

    private ?string $bio = null;

    private ?\DateTime $birthday = null;

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