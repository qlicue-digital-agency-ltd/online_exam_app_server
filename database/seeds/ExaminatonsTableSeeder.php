<?php

use App\Events\ExaminationHasBeenCreatedEvent;
use App\Examination;
use App\Subject;
use Illuminate\Database\Seeder;

class ExaminatonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examination = new Examination();
        $examination->duration = '2';
        $examination->opening_time = "2019-12-28 09:28:29";
        $examination->closing_time = "2019-12-28 09:28:29";
        $examination->teacher_id = 1;
        $examination->grade_id = 2;
        $subject = Subject::find(1);
        $subject->examinations()->save($examination);
        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));

        $examination = new Examination();
        $examination->duration = '2';
        $examination->opening_time = "2019-12-28 09:28:29";
        $examination->closing_time = "2019-12-28 09:28:29";
        $examination->teacher_id = 1;
        $examination->grade_id = 5;
        $subject = Subject::find(2);
        $subject->examinations()->save($examination);
        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));

        $examination = new Examination();
        $examination->duration = '2';
        $examination->opening_time = "2019-12-28 09:28:29";
        $examination->closing_time = "2019-12-28 09:28:29";
        $examination->teacher_id = 1;
        $examination->grade_id = 1;
        $subject = Subject::find(3);
        $subject->examinations()->save($examination);
        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));

        $examination = new Examination();
        $examination->duration = '2';
        $examination->opening_time = "2019-12-28 09:28:29";
        $examination->closing_time = "2019-12-28 09:28:29";
        $examination->teacher_id = 1;
        $examination->grade_id = 3;
        $subject = Subject::find(4);
        $subject->examinations()->save($examination);
        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));

        $examination = new Examination();
        $examination->duration = '2';
        $examination->opening_time = "2019-12-28 09:28:29";
        $examination->closing_time = "2019-12-28 09:28:29";
        $examination->teacher_id = 1;
        $examination->grade_id = 3;
        $subject = Subject::find(5);
        $subject->examinations()->save($examination);
        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));
    }
}
