<?php


namespace App\Domain\Project\Entities;


class Project
{
    /**
     * @var int|null
     */
    private ?int $id = null;

    /**
     * @var string
     */
    private string $title = '';

    /**
     * @var string
     */
    private string $description = '';

    /**
     * @var string
     */
    private string $photo = '';

    /**
     * @var string|null
     */
    private ?string $video = '';

    /**
     * @var float
     */
    private ?float $objectiveFund = null;

    /**
     * @var int
     */
    private ?int $projectHolderId = 0;

    /**
     * @var \DateTime
     */
    private ?\DateTimeInterface $dateCreated = null;

    private ?int $idCatgeory = null;

    private ?string $status = null;

    /**
     * Project constructor.
     * @param int|null $id
     * @param string $title
     * @param string $description
     * @param string $photo
     * @param string|null $video
     * @param float|null $objectiveFund
     * @param int $projectHolderId
     * @param \DateTime $dateCreated
     */
    public function __construct($id,string $title, string $description, string $photo, ?string $video, ?float $objectiveFund, ?int $projectHolderId,?int $idCatgeory)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->video = $video;
        $this->objectiveFund = $objectiveFund;
        $this->projectHolderId = $projectHolderId;
        $this->dateCreated = new \DateTimeImmutable();
        $this->idCatgeory = $idCatgeory;
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
    public function setDescription(string $description = "desc"): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated(): \DateTimeInterface
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
    public function getObjectiveFund(): ?float
    {
        return $this->objectiveFund;
    }

    /**
     * @return int|null
     */
    public function getIdCatgeory(): ?int
    {
        return $this->idCatgeory;
    }

    /**
     * @param int|null $idCatgeory
     */
    public function setIdCatgeory(?int $idCatgeory): void
    {
        $this->idCatgeory = $idCatgeory;
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
    public function getProjectHolderId(): ?int
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
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }




}