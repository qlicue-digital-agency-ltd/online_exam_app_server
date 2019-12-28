<?php

use App\Answer;
use App\Question;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///Question 1 answers
        $answer = new Answer();
        $answer->content = "3";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "4";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(1);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "10";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "6";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);


        ///Question 2 answers
        $answer = new Answer();
        $answer->content = "6";
        $answer->alphabet = "A";
        $answer->is_correct = true;
        $question = Question::find(2);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "4";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "2";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "8";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(1);
        $question->answers()->save($answer);


        ///Question 3 answers
        $answer = new Answer();
        $answer->content = "10";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(3);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "4";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(3);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "8";
        $answer->alphabet = "C";
        $answer->is_correct = true;
        $question = Question::find(3);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "7";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(3);
        $question->answers()->save($answer);

        ///Question 4 answers
        $answer = new Answer();
        $answer->content = "3";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(4);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "16";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(4);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "10";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(4);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "6";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(4);
        $question->answers()->save($answer);

        ///Question 5 answers
        $answer = new Answer();
        $answer->content = "22";
        $answer->alphabet = "A";
        $answer->is_correct = true;
        $question = Question::find(5);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "12";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(5);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "5";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(5);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "13";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(5);
        $question->answers()->save($answer);

        ///Question 6 answers
        $answer = new Answer();
        $answer->content = "Square";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(6);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Sphere";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(6);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Triangle";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(6);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Rectangle";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(6);
        $question->answers()->save($answer);

        ///Question 7 answers
        $answer = new Answer();
        $answer->content = "3";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(7);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "6";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(7);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "10";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(7);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "10";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(7);
        $question->answers()->save($answer);

        ///Question 8 answers
        $answer = new Answer();
        $answer->content = "Square";
        $answer->alphabet = "A";
        $answer->is_correct = true;
        $question = Question::find(8);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Sphere";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(8);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Triangle";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(8);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Rectangle";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(8);
        $question->answers()->save($answer);

        ///Question 9 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = true;
        $question = Question::find(9);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(8);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(9);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(9);
        $question->answers()->save($answer);



        ///Question 10 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(10);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = false;
        $question = Question::find(10);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(10);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = true;
        $question = Question::find(10);
        $question->answers()->save($answer);

        ///Question 11 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(11);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(11);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(11);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(11);
        $question->answers()->save($answer);

        ///Question 12 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(12);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(12);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(12);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(12);
        $question->answers()->save($answer);


        ///Question 13 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(13);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(13);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(13);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(13);
        $question->answers()->save($answer);

        ///Question 14 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(14);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(14);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(14);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(14);
        $question->answers()->save($answer);

        ///Question 15 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(15);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(15);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(15);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(15);
        $question->answers()->save($answer);

        ///Question 16 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(16);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(16);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(16);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(16);
        $question->answers()->save($answer);

        ///Question 17 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(17);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(17);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(17);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(17);
        $question->answers()->save($answer);

        ///Question 18 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(18);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(18);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(18);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(18);
        $question->answers()->save($answer);

        ///Question 19 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(19);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(19);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(19);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(19);
        $question->answers()->save($answer);

        ///Question 20 answers
        $answer = new Answer();
        $answer->content = "Sugar";
        $answer->alphabet = "A";
        $answer->is_correct = false;
        $question = Question::find(20);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "pudding";
        $answer->alphabet = "B";
        $answer->is_correct = true;
        $question = Question::find(20);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "biscuit muffin";
        $answer->alphabet = "C";
        $answer->is_correct = false;
        $question = Question::find(20);
        $question->answers()->save($answer);

        $answer = new Answer();
        $answer->content = "Chocolate bar";
        $answer->alphabet = "D";
        $answer->is_correct = false;
        $question = Question::find(20);
        $question->answers()->save($answer);
    }
}
