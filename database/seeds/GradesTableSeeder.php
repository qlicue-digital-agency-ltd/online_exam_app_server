<?php

use App\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade = new Grade;
        $grade->name = "Grade One";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Two";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Three";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Four";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Five";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Six";
        $grade->save();

        $grade = new Grade;
        $grade->name = "Grade Seven";
        $grade->save();
    }
}
