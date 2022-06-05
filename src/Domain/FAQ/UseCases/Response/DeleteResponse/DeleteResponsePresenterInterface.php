<?php


namespace App\Domain\FAQ\Response\DeleteResponse;


interface DeleteResponsePresenterInterface
{
    /**
     * @param DeleteResponseResponse $deleteResponseResponse
     * @return mixed
     */
    public function present(DeleteResponseResponse $deleteResponseResponse);
}