<?php require_once "controllers/calendar-controller.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lhp8Calendar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <h1 class="text-center">Calendrier LHP8</h1>
    <h2><?= $year ?></h2>
    <h2><?= $monthLetters ?></h2>

    <div class="row justify-content-center p-0 mt-5 mx-0">
        <div class="col-10 calendar p-0 m-0">

            <!-- Nous réalisons une boucle pour afficher les jours de la semaine -->
            <?php
            foreach ($days as $key => $value) { ?>
                <div class="text-center text-light bg-dark"><?= $value ?></div>
            <?php } ?>





        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>