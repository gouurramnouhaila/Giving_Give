<?php


namespace App\Domain\FAQ\Question\AddQuestion;


interface AddQuestionPresenterInterface
{
    /**
     * @param AddQuestionResponse $addQuestionResponse
     * @return mixed
     */
    public function present(AddQuestionResponse $addQuestionResponse);
}