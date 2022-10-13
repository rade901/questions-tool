<?php
$text1 = "question:";
$text2 = "answer1:";
$text3 = "answer2:";
$text4 = "answer3:";
$text5 = "correct:";

// define variables and set to empty values
$answer1 = $answer2 = $answer3 =  $question =  $correct = $textPromt = $message = "";
// If the filds are empty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer1 = filter_var($_POST["answer1"]);
    $answer2 = filter_var($_POST["answer1"]);
    $answer3 = filter_var($_POST["answer1"]);
    $question = filter_var($_POST["question"]);
    $correct = filter_var($_POST["correct"]);
    if ($answer1 == "") {
        $textPromt = "Please enter your answer1";
    }
    if ($answer2 == "") {
        $textPromt = "Please enter your answer2";
    }
    if ($answer2 == "") {
        $textPromt = "Please enter your answer3";
    }
    if ($question == "") {
        $textPromt = "Please enter your question";
    } else {
        //if the filds are not empty
        $message = "Question is save!";
        echo "<script>setTimeout(\"location = 'index.php';\",1500);</script>";


        // Data we'd like to write to the users.txt file
        $lineTop = "[\n";
        $lineMiddle = "'question' =>'$question'," . "\n";
        $lineAnswer = "'answers' => [" . "\n";
        $answer1 = " 1 => '$answer1', ". "\n";
        $answer2 = " 2 => '$answer2', ". "\n";
        $answer3 = " 3 => '$answer3', ". "\n";
        $endOfanswer = "]," . "\n";
        $correctAnswer = " correct => '$correct', ". "\n";
        $lineBotton = "],\n";

        // Open questions.txt for writing
        $fh = fopen('questions.txt', 'a');

        // Write the data
        fwrite($fh, $lineTop);
        fwrite($fh, $lineMiddle);
        fwrite($fh, $lineAnswer);
        fwrite($fh, $answer1);
        fwrite($fh, $answer2);
        fwrite($fh, $answer3);
        fwrite($fh, $endOfanswer);
        fwrite($fh, $correctAnswer);
        fwrite($fh, $lineBotton);

        // Close the handle
        fclose($fh);
    }
}
