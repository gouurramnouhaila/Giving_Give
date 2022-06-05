<?php


namespace App\Domain\FAQ\Response\AddResponse;


interface AddResponsePresenterInterface
{
    /**
     * @param AddResponseResponse $addResponseResponse
     * @return mixed
     */
    public function present(AddResponseResponse $addResponseResponse);
}