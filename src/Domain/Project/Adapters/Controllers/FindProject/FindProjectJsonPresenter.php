<?php


namespace App\Domain\Project\Adapters\Controllers\FindProject;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\FindProject\FindProjectPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class FindProjectJsonPresenter implements FindProjectPresenterInterface
{
    public  ?int $id = null;

    private ?string $title = null;

    public ?string $description = null;

    public ?string $photo = null;

    public ?string $video = null;

    public ?float $objectiveFund = null;

    public ?int $projectHolderId = null;

    public ?\DateTimeImmutable $dateCreated = null;

    public ?int $idCategory = null;

    /**
     * @inheritDoc
     */
    public function present(Project $project): void
    {
        $this->id = $project->getId();
        $this->title = $project->getTitle();
        $this->description = $project->getDescription();
        $this->video = $project->getVideo();
        $this->dateCreated = $project->getDateCreated();
        $this->photo = $project->getPhoto();
        $this->objectiveFund = $project->getObjectiveFund();
        $this->idCategory = $project->getIdCategory();

    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse (
            [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'photo' => $this->photo,
                'video' => $this->video,
                'objectiveFund' => $this->objectiveFund,
                'projectHolderId' => $this->projectHolderId,
                'dateCreated' => $this->dateCreated,
                'idCategory' => $this->idCategory
            ]
        );
    }
}