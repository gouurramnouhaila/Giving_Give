<?php


namespace App\Domain\Project\UseCase\UpDateProject;


use DateTimeImmutable;

class UpDateProjectRequest
{

    public ?int $id = null;

    public ?string $title = null;

    public ?string $description = null;

    public ?string $photo = null;

    public ?string $video = null;

    public ?float $objectiveFund = null;

    public ?int $projectHolderId = null;

    public DateTimeImmutable $dateCreated;

    public ?int $idCategory = null;

    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $description
     * @param string|null $photo
     * @param string|null $video
     * @param float|null $objectiveFund
     * @param int|null $projectHolderId
     * @param DateTimeImmutable|null $dateCreated
     * @param int|null $idCategory
     */
    public function __construct(?int $id, ?string $title, ?string $description, ?string $photo, ?string $video, ?float $objectiveFund, ?int $projectHolderId, ?DateTimeImmutable $dateCreated, ?int $idCategory)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->video = $video;
        $this->objectiveFund = $objectiveFund;
        $this->projectHolderId = $projectHolderId;
        $this->dateCreated = new DateTimeImmutable();
        $this->idCategory = $idCategory;
    }
}