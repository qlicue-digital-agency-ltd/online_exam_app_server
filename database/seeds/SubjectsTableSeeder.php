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
        $subject->save();

        $subject = new Subject();
        $subject->name = "Mathematics";
        $subject->save();

        $subject = new Subject();
        $subject->name = "English";
        $subject->save();

        $subject = new Subject();
        $subject->name = "Science";
        $subject->save();

        $subject = new Subject();
        $subject->name = "Swahili";
        $subject->save();
    }
}
