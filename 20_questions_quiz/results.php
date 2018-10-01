<?php

    session_start();
    $tester = $_SESSION['test'];
    $result = $_SESSION['score'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet"> 

    <title>Results</title>

</head>
<body>
    
    <section class="result-1">
        <div id="score-1">

            <p>Score: <?php echo $_SESSION['score']; ?> / 20</p>

            <form action="results.php" method="POST" enctype="multipart/form-data">
                <button name="Submit" class="button-summary-class">Restart</button>
            </form>

        </div>
    </section>

    <section class="result-2">
        <div id="score-2">

            <?php

                if ($_SESSION['score'] == 20) {
                    echo ("<p class='result'>You answered all of it correctly. Don't let it go to your head!</p>");
                }
                if ($_SESSION['score'] < 20 && $_SESSION['score'] > 17) {
                    echo ("<p class='result'>Your score is almost perfect. Maybe, you got distracted.</p>");
                }
                if ($_SESSION['score'] < 18 && $_SESSION['score'] > 15) {
                    echo ("<p class='result'>Your score is very good. You have the right to celebrate.</p>");
                }
                if ($_SESSION['score'] < 16 && $_SESSION['score'] > 13) {
                    echo ("<p class='result'>Your score is bordering on very good.</p>");
                }
                if ($_SESSION['score'] < 14 && $_SESSION['score'] > 11) {
                    echo ("<p class='result'>Your score is good, but not very good.</p>");
                }
                if ($_SESSION['score'] < 12 && $_SESSION['score'] > 9) {
                    echo ("<p class='result'>You're above average.</p>");
                }
                if ($_SESSION['score'] < 10 && $_SESSION['score'] > 7) {
                    echo ("<p class='result'>You're below average. Maybe, you can do better.</p>");
                }
                if ($_SESSION['score'] < 8 && $_SESSION['score'] > 5) {
                    echo ("<p class='result'>Not too bad, but it's bad still.</p>");
                }
                if ($_SESSION['score'] < 6 && $_SESSION['score'] > 2) {
                    echo ("<p class='result'>...I've seen worse.</p>");
                }
                if ($_SESSION['score'] < 3 && $_SESSION['score'] > -1) {
                    echo ("<p class='result'>Such a shame. You had so much potential!</p>");
                }

            ?>

        </div>
    </section>

    <?php

        $submitIsset = isset($_REQUEST['Submit']);

        if ($submitIsset) {

            header("Location: ./index.php");

        }
    
        echo "Score: ".$_SESSION['score']."<br>";
        echo "Count: ".$_SESSION['count'];
    
    ?>

    <style>

        body {

            background: rgb(255,243,243);
            background: linear-gradient(

                0deg,
                rgba(255,243,243,1) 0%,
                rgba(174,141,146,1) 56%,
                rgba(149,112,145,1) 69%,
                rgb(100, 53, 99) 88%,
                rgba(49,48,56,1) 94%

            );

            height: 802px;

        }

        .result-1, .result-2 {

            font-family: 'Bai Jamjuree', sans-serif;

        }

        #score-2 {

            position: relative;
            top: -100px;

        }

        #score-1 {

            margin-left: -90px;

        }

        .result {
            
            position: relative;
            font-size: 60px;
            text-align: center;
            top: 500px;            
            color: rgba(0 , 0, 0, 0.6);
            text-shadow: 3px 2px 3px rgba(50, 50, 50, 0.6);
            animation: appear 3s ease 1 forwards;

        }

        .button-summary-class {

            position: relative;
            margin-left: 240px;
            top: 170px;
            width: 120px;
            height: 50px;
            background: linear-gradient(rgba(20, 10, 100, 1), rgba(100, 40, 240, 1), rgba(20, 10, 100, 1));
            font-family: 'Bai Jamjuree', sans-serif;
            font-size: 30px;
            transition-duration: 1s;
            animation-direction: alternate;
            animation-name: buttonLight-summary;

        }

        .button-summary-class:hover {

            cursor: pointer;
            color: rgba(220, 100, 255, 1);
            background: linear-gradient(rgba(150, 40, 240, 1), rgba(20, 10, 100, 1), rgba(150, 40, 240, 1));
            box-shadow: 0 0 4px rgba(150, 80, 240, 1), 0 0 8px rgba(150, 40, 240, 1);

        }

        .button-summary-class:active {

            cursor: pointer;
            color: rgba(220, 100, 255, 1);
            background: linear-gradient(rgba(150, 40, 240, 1), rgba(20, 10, 100, 1), rgba(150, 40, 240, 1));
            box-shadow: 0 0 4px rgba(150, 80, 240, 1), 0 0 8px rgba(150, 40, 240, 1);
            text-shadow: 0 0 46px rgba(240, 200, 255, 1), 0 0 10px rgba(240, 200, 255, 1);

        }

        @keyframes buttonLight-summary {

            0% {background: linear-gradient(rgba(100, 10, 20, 1), rgba(240, 40, 100, 1), rgba(100, 10, 20, 1));}
            100% {color: rgba(220, 100, 255, 1); background: linear-gradient(rgba(150, 40, 240, 1), rgba(20, 10, 100, 1), rgba(150, 40, 240, 1));}

        }

    </style>

</body>
</html>