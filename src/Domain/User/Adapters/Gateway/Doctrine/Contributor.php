<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use Doctrine\ORM\Mapping as ORM;


/**
* Class Contributor
 * @package App\Domain\User\Adapters\Gateway\Doctrine
* @ORM\Entity(repositoryClass="DoctrineContributorRepository")
*/
class Contributor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $firstName;

    /**
     * @ORM\Column(type="string")
     */
    private string $lastName;

    /**
     * @ORM\Column(type="string")
     */
    private string $email;

    /**
     * @ORM\Column(type="string")
     */
    private string $password;

    /**
     * @ORM\Column(type="string")
     */
    private string $state;


    /**
     * @ORM\Column(type="date")
     */
    private \DateTime $birthday;

    /**
     * @ORM\OneToMany(targetEntity="App\Domain\Notification\Adapters\Gateway\Doctrine\Notification", mappedBy="contributor")
     */
    private $notifications;

    /**
     * Contributor constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string $state
     * @param \DateTime $birthday
     * @param $notifications
     */
    public function __construct(string $firstName, string $lastName, string $email, string $password, string $state, \DateTime $birthday, $notifications)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->state = $state;
        $this->birthday = $birthday;
        $this->notifications = $notifications;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications): void
    {
        $this->notifications = $notifications;
    }



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }


    /**
     * @return \DateTime
     */
    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }

    /**
     * @param DateTime $birthday
     */
    public function setBirthday(\DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }


}