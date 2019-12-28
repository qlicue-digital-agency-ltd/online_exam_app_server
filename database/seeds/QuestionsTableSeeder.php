<?php

use App\Examination;
use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        ///Arithemetic questions

        $question = new Question();
        $question->content = "2 + 2";
        /// $question->image = $path;
        $examination = Examination::find(1);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "4 + 2";
        /// $question->image = $path;
        $examination = Examination::find(1);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "2 + 6";
        /// $question->image = $path;
        $examination = Examination::find(1);
        $examination->questions()->save($question);


        ///Mathematics Questions

        $question = new Question();
        $question->content = "10 + 6";
        /// $question->image = $path;
        $examination = Examination::find(2);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "11 X 2";
        /// $question->image = $path;
        $examination = Examination::find(2);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Name the shape below.";
        $question->image = "questions/6VOhoTBuWIdiayVA1yIVT3sZuBPYvTQ2VWIQiWyF.png";
        $examination = Examination::find(2);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "12 - 6";
        /// $question->image = $path;
        $examination = Examination::find(2);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Name the shape below.";
        $question->image = "questions/wPgCtPmI5fv7IgfIB18eOXBFzmr5p0KB4aq9PLWS.png";
        $examination = Examination::find(2);
        $examination->questions()->save($question);


        ///English..
        $question = new Question();
        $question->content = "Biscuit cookie dessert gummies chocolate bar?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Carrot cake tiramisu candy soufflé?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Dessert cheesecake donut soufflé chocolate cake?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Tootsie roll chocolate jelly?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Tootsie roll chocolate jelly?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "chocolate cake halvah pudding ice cream?";
        $examination = Examination::find(3);
        $examination->questions()->save($question);


        ///Science
        $question = new Question();
        $question->content = "Chocolate bar sugar plum sugar plum sweet roll?";
        $examination = Examination::find(4);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Croissant pie jelly-o marshmallow sweet?";
        $question->image = "questions/JyLc7r5tjIIYwnPoqJWhgfZRjjxB4bRxYkw3PLVN.png";
        $examination = Examination::find(4);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Croissant pie jelly-o marshmallow sweet?";
        $question->image = "questions/6VOhoTBuWIdiayVA1yIVT3sZuBPYvTQ2VWIQiWyF.png";
        $examination = Examination::find(4);
        $examination->questions()->save($question);


        ///Swahili
        $question = new Question();
        $question->content = "Chocolate bar sugar plum sugar plum sweet roll?";
        $examination = Examination::find(5);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Croissant pie jelly-o marshmallow sweet?";
        $question->image = "questions/JyLc7r5tjIIYwnPoqJWhgfZRjjxB4bRxYkw3PLVN.png";
        $examination = Examination::find(5);
        $examination->questions()->save($question);

        $question = new Question();
        $question->content = "Croissant pie jelly-o marshmallow sweet?";
        $question->image = "questions/6VOhoTBuWIdiayVA1yIVT3sZuBPYvTQ2VWIQiWyF.png";
        $examination = Examination::find(5);
        $examination->questions()->save($question);
    }
}
