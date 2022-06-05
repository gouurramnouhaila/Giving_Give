<?php


namespace App\Domain\Project\Adapters\Controllers\UpDateProject;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\UpDateProject\UpDateProjectPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class UpDateProjetJsonPresenter implements UpDateProjectPresenterInterface
{

    public  $id;

    private  $title;

    public  $description;

    public $photo;

    public $video;

    public $objectiveFund;

    public  $projectHolderId;

    public  $dateCreated;

    public $idCategory;

    /**
     * @inheritDoc
     */
    public function present(Project $upDateProjectResponse): void
    {
        $this->title = $upDateProjectResponse->getTitle();
        $this->description = $upDateProjectResponse->getDescription();
        $this->video = $upDateProjectResponse->getVideo();
        $this->dateCreated = $upDateProjectResponse->getDateCreated();
        $this->photo = $upDateProjectResponse->getPhoto();
        $this->objectiveFund = $upDateProjectResponse->getObjectiveFund();
        $this->idCategory = $upDateProjectResponse->getIdCatgeory();

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