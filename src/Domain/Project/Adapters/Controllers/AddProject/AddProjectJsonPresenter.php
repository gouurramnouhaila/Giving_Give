<?php


namespace App\Domain\Project\Adapters\Controllers\AddProject;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\AddProject\AddProjectPresenterInterface;
use App\Domain\Project\UseCase\AddProject\AddProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class AddProjectJsonPresenter implements AddProjectPresenterInterface
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
     * @inheritDoc
     */
    public function present(Project $projectResponse): void
    {
        $this->id = $projectResponse->getId();
        $this->title = $projectResponse->getTitle();
        $this->description = $projectResponse->getDescription();
        $this->photo = $projectResponse->getPhoto();
        $this->video = $projectResponse->getVideo();
        $this->objectiveFund = $projectResponse->getObjectiveFund();
        $this->projectHolderId = $projectResponse->getProjectHolderId();
        $this->dateCreated = $projectResponse->getDateCreated();
        $this->idCatgeory = $projectResponse->getIdCatgeory();
        $this->status = $projectResponse->getStatus();
    }

    public function getResponse() {
        return new JsonResponse([
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'photo' => $this->photo,
            'video' => $this->video,
            'objectiveFund' => $this->objectiveFund,
            'projectHolderId' => $this->projectHolderId,
            'dateCreated' => $this->dateCreated,
            'idCatgeory' => $this->idCatgeory,
            'status' => $this->status
        ]);
    }
}