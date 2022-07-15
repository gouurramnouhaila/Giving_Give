<?php


namespace App\Domain\User\UseCases\Contributor\AddContributor;


use DateTimeImmutable;

class AddContributorRequest
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
     * @var DateTimeImmutable|null
     */
    private ?DateTimeImmutable $birthday = null;

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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getBirthday(): ?DateTimeImmutable
    {
        return $this->birthday;
    }

    /**
     * @param DateTimeImmutable|null $birthday
     */
    public function setBirthday(?DateTimeImmutable $birthday): void
    {
        $this->birthday = $birthday;
    }




}