<?php
    
    unset($_POST);

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet">

    <title>20 questions quiz - Page 4</title>

</head>
<body>

    <div class="que-ans-id">

        <form action="page4.php" method="POST" enctype="multipart/form-data">
            <section class="section-1">

                <label for="question" class="question"><?php echo $_SESSION['questions'][3] ?></label><br>
        
            </section>
            <section class="section-2">

                <br><label for="answer" class="answer"><?php echo $_SESSION['answers'][3][0] ?></label><br>
                <input type="radio" name="radio" value="radio-1" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $_SESSION['answers'][3][1] ?></label><br>
                <input type="radio" name="radio" value="radio-2" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $_SESSION['answers'][3][2] ?></label><br>
                <input type="radio" name="radio" value="radio-3" class="radio-class">

                <br><label for="answer" class="answer"><?php echo $_SESSION['answers'][3][3] ?></label><br>
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

        if ($submitIsset && $radioIsset && $_REQUEST['radio'] == 'radio-4') {

            $_SESSION['score']++;
            $_SESSION['count']++;
            header("Location: ./page5.php");

        }

        if ($submitIsset && $radioIsset) {            
            
            $_SESSION['count']++;
            header("Location: ./page5.php");
    
        }      
        
    ?>

</body>
</html>