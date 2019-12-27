<?php

namespace App\Listeners;

use App\Events\ExaminationHasBeenCreatedEvent;
use Carbon\Carbon;
use DateTime;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class GenerateExaminationNumberListener
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
     * @param  ExaminationHasBeenCreatedEvent  $event
     * @return void
     */
    public function handle(ExaminationHasBeenCreatedEvent $event)
    {
        $year = Carbon::now()->year;
        $event->examination->update([
            'exam_no' => 'SPE/' . $year . '/0000' . $event->examination->id . '/' . $event->examination_code
        ]);
    }
}
