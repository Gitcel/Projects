<?php

    session_start();

    unset($_SESSION['count']);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet">

    <title>20 questions quiz - Page1</title>

</head>
<body>

    <?php

        $question1 = "What is the capital of the United States?";
        $question2 = "What is the exact time, at this moment?";
        $question3 = "How many colours compose a rainbow?";
        $question4 = "What colour is the sky, during daytime?";
        $question5 = "Do cats clean themselves as well as dogs?";
        $question6 = "Which shape is better to use as a wheel?";
        $question7 = "Are computers faster, in terms of processing speed, compared to before?";
        $question8 = "What is the highest and most well-known mountain in the world?";
        $question9 = "What is the generation of people, born during the second world war, called?";
        $question10 = "What is the most commonly used vehicle across the world?";
        $question11 = "What was one of the first programming languages, that was created by IBM?";
        $question12 = "What is the most popular programming language used for server-side processes?";
        $question13 = "Which of the four is a markup language?";
        $question14 = "Which of the four are animals?";
        $question15 = "How many stars are in this universe?";
        $question16 = "What do civilized people drink water out of?";
        $question17 = "How many fingers does your hand have?";
        $question18 = "What are the four elements of nature?";
        $question19 = "What is the most popular browser used?";
        $question20 = "How many questions did you answer, in this quiz?";

        $answers1 = array("New York", "Cape Town", "Washington", "London");
        $answers2 = array("10:30 am", "14:00 pm", "17:20 pm", "Time changes at every moment");
        $answers3 = array(4, 8, 1, 7);
        $answers4 = array("Purple", "Red", "Blue", "Blue, if it's not overcast.");
        $answers5 = array("Yes", "No", "I don't know.", "Dogs don't clean themselves.");
        $answers6 = array("Triangle", "Square", "Circle", "Octagon");
        $answers7 = array("Yes", "No", "I don't know.", "It's the same as before.");
        $answers8 = array("Table mountain", "Mount Everest", "Mount Makalu", "K2");
        $answers9 = array("Generation Z", "Baby boomers", "Generation X", "Milennials");
        $answers10 = array("Motocycle", "Helicopter", "Aeroplane", "Car");
        $answers11 = array("JavaScript", "C", "COBOL", "Fortran");
        $answers12 = array("C#", "Java", "PHP", "React");
        $answers13 = array("C", "Java", "Python", "HTML");
        $answers14 = array("Cricket", "Daisy", "Human", "Rat");
        $answers15 = array("1205", "49 004 568 541", "3 220 459", "Unknown");
        $answers16 = array("Toilet pot", "Bath", "Glass", "Shoe");
        $answers17 = array(4, 6, 9, 5);
        $answers18 = array("Wind, urine, water and earth.", "Earth, wind, fire and water", "Earth, wind, lava and water.", "Water, wind, earth and plants.");
        $answers19 = array("Internet explorer", "Mozilla Firefox", "Opera", "Google Chrome");
        $answers20 = array(9, 24, 20, 19);

        $questions = array();
        $answers = array();

        array_push($questions, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, 
                $question9, $question10, $question11, $question12, $question13, $question14, $question15, $question16,
                $question17, $question18, $question19, $question20);

        array_push($answers, $answers1, $answers2, $answers3, $answers4, $answers5, $answers6, $answers7, $answers8,
                $answers9, $answers10, $answers11, $answers12, $answers13, $answers14, $answers15, $answers16,
                $answers17, $answers18, $answers19, $answers20);
        
        $_SESSION['questions'] = $questions;
        $_SESSION['answers'] = $answers;

        $count = 0;
        $_SESSION['count'] = $count;

        $score = 0;
        $_SESSION['score'] = $score;

    ?>

    <div class="que-ans-id">

        <form action="index.php" method="POST" enctype="multipart/form-data">
            <section class="section-1">

                <label for="question" class="question"><?php echo $questions[0] ?></label><br>
                        
            </section>
            <section class="section-2">

                <br><label for="answer" class="answer"><?php echo $answers[0][0] ?></label><br>
                <input type="radio" name="radio" value="radio-1" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $answers[0][1] ?></label><br>
                <input type="radio" name="radio" value="radio-2" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $answers[0][2] ?></label><br>
                <input type="radio" name="radio" value="radio-3" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $answers[0][3] ?></label><br>
                <input type="radio" name="radio" value="radio-4" class="radio-class">

                <button name="Submit" class="button-class">Send</button>
        
            </section>

        </form>
    </div>
                
    <script>

        var button = document.querySelector(".que-ans-id");                                                    
            
    </script>

    <?php

        $submitIsset = isset($_REQUEST['Submit']);
        $radioIsset = isset($_REQUEST['radio']);

        if ($submitIsset && $radioIsset && $_REQUEST['radio'] == 'radio-3') {

            $_SESSION['score']++;
            $_SESSION['count']++;
            header("Location: ./page2.php");

        }

        else if ($submitIsset && $radioIsset) {            
            
            $_SESSION['count']++;
            header("Location: ./page2.php");

        }

    ?>

</body>
</html>