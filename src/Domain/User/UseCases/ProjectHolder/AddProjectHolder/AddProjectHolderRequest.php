<?php


namespace App\Domain\User\UseCases\ProjectHolder\AddProjectHolder;


class AddProjectHolderRequest
{
    public ?int $id = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $email = null;

    public ?string $password = null;

    public ?string $state = null;

    public ?string $photo = null;

    public ?string $bio = null;

    public ?\DateTime $birthday = null;

    /**
     * @param int|null $id
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $email
     * @param string|null $password
     * @param string|null $state
     * @param string|null $photo
     * @param string|null $bio
     * @param \DateTime|null $birthday
     */
    public function __construct(?int $id, ?string $firstName, ?string $lastName, ?string $email, ?string $password, ?string $state, ?string $photo, ?string $bio, ?\DateTime $birthday)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->state = $state;
        $this->photo = $photo;
        $this->bio = $bio;
        $this->birthday = $birthday;
    }
}