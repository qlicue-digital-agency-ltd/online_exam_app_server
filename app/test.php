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