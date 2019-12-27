<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = new Subject();
        $subject->name = "Arithemetic";
        $subject->code = "AR";
        $subject->save();

        $subject = new Subject();
        $subject->name = "Mathematics";
        $subject->code = "MT";
        $subject->save();

        $subject = new Subject();
        $subject->name = "English";
        $subject->code = "ENG";
        $subject->save();

        $subject = new Subject();
        $subject->name = "Science";
        $subject->code = "SCI";
        $subject->save();

        $subject = new Subject();
        $subject->name = "Swahili";
        $subject->code = "SW";
        $subject->save();
    }
}
