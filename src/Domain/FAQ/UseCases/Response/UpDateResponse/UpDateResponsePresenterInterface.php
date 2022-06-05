<?php


namespace App\Domain\FAQ\Response\UpDateResponse;


interface UpDateResponsePresenterInterface
{
    /**
     * @param UpDateResponseResponse $upDateResponseResponse
     * @return mixed
     */
    public function present(UpDateResponseResponse $upDateResponseResponse);
}