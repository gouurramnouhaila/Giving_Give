<?php


namespace App\Domain\User\Entities;


class Admin
{
    /**
     * @var int
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private  string $lastName;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var bool
     */
    private bool $verify;

    /**
     * Admin constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param bool $verify
     */
    public function __construct($id,string $firstName, string $lastName, string $email, string $password, bool $verify)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->verify = $verify;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isVerify(): bool
    {
        return $this->verify;
    }

    /**
     * @param bool $verify
     */
    public function setVerify(bool $verify): void
    {
        $this->verify = $verify;
    }




}