<?php

use App\Student;
use App\User;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $student = new Student();
        $student->name = 'PETER KIKWA';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(2);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'Maria Sarungi';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Female';
        $student->school_name = 'Doris English Medium';

        $user = User::find(3);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'JOHN POMBE';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(4);
        $user->students()->save($student);


        $student = new Student();
        $student->name = 'JANE KIKWA';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Female';
        $student->school_name = 'Doris English Medium';

        $user = User::find(2);
        $user->students()->save($student);


        $student = new Student();
        $student->name = 'JAMES BANDOMA';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(5);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'ASHA HAMIS';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Female';
        $student->school_name = 'Doris English Medium';

        $user = User::find(6);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'Hussein Ngassy';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(5);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'FRED IKANGA';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(3);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'IKA MELLA';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Female';
        $student->school_name = 'Doris English Medium';

        $user = User::find(4);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'WINNY MAKUNDI';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Female';
        $student->school_name = 'Doris English Medium';

        $user = User::find(6);
        $user->students()->save($student);

        $student = new Student();
        $student->name = 'RAHIM KISHASHU';
        $student->image = null;
        $student->grade_id = 1;
        $student->district_id = 1;
        $student->region_id = 1;
        $student->age = 7;
        $student->gender = 'Male';
        $student->school_name = 'Doris English Medium';

        $user = User::find(6);
        $user->students()->save($student);
    }
}
