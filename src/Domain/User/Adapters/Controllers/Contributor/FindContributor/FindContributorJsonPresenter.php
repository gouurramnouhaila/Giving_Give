<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindContributor;


use App\Domain\User\Adapters\Gateway\Doctrine\Contributor;
use App\Domain\User\UseCases\Contributor\FindContributor\FindContributorPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class FindContributorJsonPresenter implements FindContributorPresenterInterface
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
     * @var DateTime
     */
    private \DateTime $birthday;

    /**
     * @inheritDoc
     */
    public function present(Contributor $contributor): void
    {
        $this->id = $contributor->getId();
        $this->firstName = $contributor->getFirstName();
        $this->lastName = $contributor->getLastName();
        $this->email = $contributor->getEmail();
        $this->password = $contributor->getPassword();
        $this->state = $contributor->getState();
        $this->birthday = $contributor->getBirthday();
    }


    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'state' => $this->state,
            'birthday' => $this->birthday
        ]);
    }
}