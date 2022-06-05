<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindProjectHolder;


use App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder;
use App\Domain\User\UseCases\ProjectHolder\FindProjectHolder\FindProjectHolderPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class FindProjectHolderJsonPresenter implements FindProjectHolderPresenterInterface
{


    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var string
     */
    private string $state;

    /**
     * @var string
     */
    private string $photo;

    /**
     * @var string
     */
    private string $bio;

    /**
     * @var \DateTime
     */
    private \DateTime $birthday;


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

    public function getResponse() {
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