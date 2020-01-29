<?php

namespace App\Listeners;
use App\Answer;
use App\Events\QuestionHasBeenCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostQuestionAnswerListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuestionHasBeenCreatedEvent  $event
     * @return void
     */
    public function handle(QuestionHasBeenCreatedEvent $event)
    {
      
        $answer = new Answer();
        $answer->content = $event->request->input('content');
        $answer->alphabet = $event->request->input('alphabet');
        $answer->is_correct = $event->request->input('is_correct');

        $event->question->answers()->save($answer);

       return  response()->json(['answer' => $answer], 201);
    }
}
