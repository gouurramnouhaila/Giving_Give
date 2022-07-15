<?php


namespace App\Domain\User\UseCases\Contributor\UpDateContributor;


use DateTimeImmutable;

class UpdateContributorRequest
{
    /**
     * @var int|null
     */
    public ?int $id = null;

    /**
     * @var string|null
     */
    public ?string $firstName = null;

    /**
     * @var string|null
     */
    public ?string $lastName = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $password = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var DateTimeImmutable|null
     */
    public ?DateTimeImmutable $birthday = null;

    /**
     * @param int|null $id
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $email
     * @param string|null $password
     * @param string|null $state
     * @param DateTimeImmutable|null $birthday
     */
    public function __construct(?int $id, ?string $firstName, ?string $lastName, ?string $email, ?string $password, ?string $state, ?DateTimeImmutable $birthday)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->state = $state;
        $this->birthday = $birthday;
    }

}