<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\AddProjectHolder;


use App\Domain\User\Entities\ProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\AddProjectHolder\AddProjectHolderPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class AddProjectHolderJsonPresenter implements AddProjectHolderPresenterInterface{

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
    public function present(ProjectHolder $projectHolder)
    {
        $this->id = $projectHolder->getId();
        $this->firstName = $projectHolder->getFirstName();
        $this->lastName = $projectHolder->getLastName();
        $this->email = $projectHolder->getEmail();
        $this->password = $projectHolder->getPassword();
        $this->state = $projectHolder->getState();
        $this->photo = $projectHolder->getPhoto();
        $this->bio = $projectHolder->getBio();
        $this->birthday = $projectHolder->getBirthday();
    }

    public function getResponse(): JsonResponse {
        return new JsonResponse([
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'state' => $this->state,
            'photo' => $this->photo,
            'bio' => $this->bio,
            'birthday' => $this->birthday
        ]);
    }
}