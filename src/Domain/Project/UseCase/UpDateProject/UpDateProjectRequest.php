<?php


namespace App\Domain\Project\UseCase\UpDateProject;


class UpDateProjectRequest
{

    public $id;

    public $title;

    public $description;

    public $photo;

    public $video;

    public $objectiveFund;

    public $projectHolderId;

    public \DateTimeImmutable $dateCreated;

    public $idCategory;

    /**
     * UpDateProjectRequest constructor.
     * @param int $id
     * @param string $title
     * @param string $description
     * @param string $photo
     * @param string|null $video
     * @param float $objectiveFund
     * @param int $projectHolderId
     * @param \DateTime $dateCreated
     */
    public function __construct($id,$title, $description, $photo, $video, $objectiveFund, $projectHolderId,$idCategory)
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

}