<?php


namespace App\Domain\Project\UseCase\AddProject;


use Symfony\Component\Validator\Constraints\Date;

class AddProjectRequest
{
    /**
     * @var int
     */
    private int $id = 0;

    /**
     * @var string
     */
    private ?string $title = null;

    /**
     * @var string
     */
    private ?string $description = null;

    /**
     * @var string
     */
    private string $photo;

    /**
     * @var string|null
     */
    private ?string $video = null;

    /**
     * @var float
     */
    private float $objectiveFund = 0.0;

    /**
     * @var int
     */
    private ?int $projectHolderId = null;

    /**
     * @var int
     */
    private ?int $categoryId = null;

    /**
     * @var \DateTime
     */
    private \DateTime $dateCreated;

    private string  $status;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * AddProjectRequest constructor.
     * @param string $title
     * @param string $description
     * @param string $photo
     * @param string|null $video
     * @param float $objectiveFund
     * @param int $projectHolderId
     * @param \DateTime $dateCreated
     */
    public function __construct(string $title, string $description, string $photo, ?string $video, float $objectiveFund, int $projectHolderId, \DateTime $dateCreated,int $categoryId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->video = $video;
        $this->objectiveFund = $objectiveFund;
        $this->projectHolderId = $projectHolderId;
        $this->dateCreated = $dateCreated;
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @param string|null $video
     */
    public function setVideo(?string $video): void
    {
        $this->video = $video;
    }

    /**
     * @return float
     */
    public function getObjectiveFund(): float
    {
        return $this->objectiveFund;
    }

    /**
     * @param float $objectiveFund
     */
    public function setObjectiveFund(float $objectiveFund): void
    {
        $this->objectiveFund = $objectiveFund;
    }

    /**
     * @return int
     */
    public function getProjectHolderId(): int
    {
        return $this->projectHolderId;
    }

    /**
     * @param int $projectHolderId
     */
    public function setProjectHolderId(int $projectHolderId): void
    {
        $this->projectHolderId = $projectHolderId;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     */
    public function setDateCreated(\DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }






}