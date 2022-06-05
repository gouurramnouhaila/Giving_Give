<?php


namespace App\Domain\Project\Adapters\Gateway\Doctrine;

use App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Project
 * @package App\Domain\Project\Adapters\Gateway\Doctrine
 * @ORM\Entity(repositoryClass="DoctrineProjectRepository")
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private  $description;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;

    /**
     * @ORM\Column(type="string")
     */
    private  $video;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Project\Adapters\Gateway\Doctrine\Category", inversedBy="projects")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder", inversedBy="projects")
     */
    private $projectHolder;

    /**
     * @return mixed
     */
    public function getProjectHolder()
    {
        return $this->projectHolder;
    }

    /**
     * @param mixed $projectHolder
     */
    public function setProjectHolder($projectHolder): void
    {
        $this->projectHolder = $projectHolder;
    }

    /**
     * @ORM\Column(type="float")
     */
    private  $objectiveFund;

    /**
     * @ORM\Column(type="string")
     */
    private $status;

    /**
     * Project constructor.
     * @param $title
     * @param $description
     * @param $photo
     * @param $video
     * @param $objectiveFund
     */
    public function __construct($title, $description, $photo, $video, $objectiveFund,Category $category,ProjectHolder $projectHolder)
    {
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->video = $video;
        $this->objectiveFund = $objectiveFund;
        $this->category = $category;
        $this->projectHolder = $projectHolder;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getObjectiveFund()
    {
        return $this->objectiveFund;
    }

    /**
     * @param mixed $objectiveFund
     */
    public function setObjectiveFund($objectiveFund): void
    {
        $this->objectiveFund = $objectiveFund;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }




}