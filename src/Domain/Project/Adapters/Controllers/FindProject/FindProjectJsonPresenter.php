<?php


namespace App\Domain\Project\Adapters\Controllers\FindProject;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\FindProject\FindProjectPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class FindProjectJsonPresenter implements FindProjectPresenterInterface
{
    public int $id;
    /**
     * @var string
     */
    private string $title = '';

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $photo;

    /**
     * @var string|null
     */
    public ?string $video;

    /**
     * @var float
     */
    public float $objectiveFund = 0.00;

    /**
     * @var int
     */
    public ?int $projectHolderId = null;

    /**
     * @var int
     */
    public ?int $categoryId = null;

    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $dateCreated;

    /**
     * @inheritDoc
     */
    public function present(Project $projectResponse): void
    {
        $this->id = $projectResponse->getId();
        $this->title = $projectResponse->getTitle();
        $this->description = $projectResponse->getDescription();
        $this->video = $projectResponse->getVideo();
        $this->dateCreated = $projectResponse->getDateCreated();
        $this->photo = $projectResponse->getPhoto();
        $this->objectiveFund = $projectResponse->getObjectiveFund();
        $this->projectHolderId = $projectResponse->getProjectHolderId();
        $this->categoryId = $projectResponse->getIdCatgeory();
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
                'categoryId' => $this->categoryId
            ]
        );
    }
}