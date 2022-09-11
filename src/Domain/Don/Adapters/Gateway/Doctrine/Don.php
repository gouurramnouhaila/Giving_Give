<?php


namespace App\Domain\Don\Adapters\Gateway\Doctrine;

use App\Domain\Project\Adapters\Gateway\Doctrine\Project;
use App\Domain\User\Adapters\Gateway\Doctrine\Contributor;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Don
 * @package  App\Domain\Don\Adapters\Gateway\Doctrine
 * @ORM\Entity (repositoryClass="DoctrineDonRepository")
 */
class Don
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank()
     */
    private float $amount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\User\Adapters\Gateway\Doctrine\Contributor", inversedBy="dons")
     */
    private Contributor $contributor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Project\Adapters\Gateway\Doctrine\Project", inversedBy="dons")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private Project $project;

    /**
     * @ORM\Column(type="date")
     */
    private DateTime $dateDonation;

    /**
     * @param int $id
     * @param float $amount
     * @param Contributor $contributor
     * @param Project $project
     * @param DateTime $dateDonation
     */
    public function __construct( float $amount, Contributor $contributor, Project $project, DateTime $dateDonation)
    {

        $this->amount = $amount;
        $this->contributor = $contributor;
        $this->project = $project;
        $this->dateDonation = $dateDonation;
    }
}