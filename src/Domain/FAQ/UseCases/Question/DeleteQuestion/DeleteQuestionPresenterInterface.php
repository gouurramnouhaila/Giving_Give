<?php


namespace App\Domain\FAQ\Question\DeleteQuestion;



interface DeleteQuestionPresenterInterface
{
    /**
     * @param DeleteQuestionResponse $deleteQuestionResponse
     * @return mixed
     */
    public function present(DeleteQuestionResponse $deleteQuestionResponse);
}