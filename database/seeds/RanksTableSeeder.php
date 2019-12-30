<?php

use App\Rank;
use App\Student;
use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 85;
        $student = Student::find(1);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 85;
        $student = Student::find(2);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 85;
        $student = Student::find(3);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 90;
        $student = Student::find(4);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 77;
        $student = Student::find(5);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 40;
        $student = Student::find(6);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 83;
        $student = Student::find(7);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 70;
        $student = Student::find(8);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 80;
        $student = Student::find(9);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 66;
        $student = Student::find(10);
        $student->ranks()->save($rank);


        $rank = new Rank();
        $rank->examination_id = 1;
        $rank->score = 72;
        $student = Student::find(11);
        $student->ranks()->save($rank);

        $rank = new Rank();
        $rank->examination_id = 2;
        $rank->score = 90;
        $student = Student::find(1);
        $student->ranks()->save($rank);
    }
}
