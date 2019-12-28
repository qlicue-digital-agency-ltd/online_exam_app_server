<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ExaminatonsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
    }
}
