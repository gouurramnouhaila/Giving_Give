<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\AddContributor;


use App\Domain\User\Entities\Contributor;
use App\Domain\User\UseCases\Contributor\AddContributor\AddContributorPresenterInterface;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;

class AddContributorJsonPresenter implements AddContributorPresenterInterface
{
    /**
     * @var int|null
     */
    private ?int $id = null;

    /**
     * @var string|null
     */
    private ?string $firstName = null;

    /**
     * @var string|null
     */
    private ?string $lastName = null;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var string|null
     */
    private ?string $password = null;

    /**
     * @var string|null
     */
    private ?string $state = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $birthday = null;

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

    public function getResponse(): JsonResponse {
        return new JsonResponse([
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'state' => $this->state,
            'birthDay' => $this->birthday
        ]);
    }
}