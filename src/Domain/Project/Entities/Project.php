<?php


namespace App\Domain\Project\Entities;


class Project
{
    /**
     * @var int|null
     */
    private ?int $id = null;

     /**
     * @var string|null
     */
    private ?string $title = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $photo = null;

    /**
     * @var string|null
     */
    private ?string $video = null;

    /**
     * @var float|null
     */
    private ?float $objectiveFund = null;

    /**
     * @var int|null
     */
    private ?int $projectHolderId = 0;

    private ?\DateTimeInterface $dateCreated = null;

    /**
     * @var int|null
     */
    private ?int $idCategory = null;

    /**
     * @var string|null
     */
    private ?string $status = null;

    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $description
     * @param string|null $photo
     * @param string|null $video
     * @param float|null $objectiveFund
     * @param int|null $projectHolderId
     * @param int|null $idCategory
     */
    public function __construct(?int $id, ?string $title, ?string $description, ?string $photo, ?string $video, ?float $objectiveFund, ?int $projectHolderId, ?int $idCategory)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->video = $video;
        $this->objectiveFund = $objectiveFund;
        $this->projectHolderId = $projectHolderId;
        $this->dateCreated = new \DateTimeImmutable();
        $this->idCategory = $idCategory;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @return float|null
     */
    public function getObjectiveFund(): ?float
    {
        return $this->objectiveFund;
    }

    /**
     * @return int|null
     */
    public function getProjectHolderId(): ?int
    {
        return $this->projectHolderId;
    }

    /**
     * @return \DateTimeImmutable|\DateTimeInterface|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @return int|null
     */
    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param string|null $photo
     */
    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @param string|null $video
     */
    public function setVideo(?string $video): void
    {
        $this->video = $video;
    }

    /**
     * @param float|null $objectiveFund
     */
    public function setObjectiveFund(?float $objectiveFund): void
    {
        $this->objectiveFund = $objectiveFund;
    }

    /**
     * @param int|null $projectHolderId
     */
    public function setProjectHolderId(?int $projectHolderId): void
    {
        $this->projectHolderId = $projectHolderId;
    }

    /**
     * @param \DateTimeImmutable|\DateTimeInterface|null $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @param int|null $idCategory
     */
    public function setIdCategory(?int $idCategory): void
    {
        $this->idCategory = $idCategory;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }


}