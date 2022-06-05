<?php


namespace App\Domain\FAQ\Question\UpDateQuestion;


interface UpDateQuestionPresenterInterface
{
    /**
     * @param UpDateQuestionResponse $upDateQuestionResponse
     * @return mixed
     */
    public function present(UpDateQuestionResponse $upDateQuestionResponse);
}