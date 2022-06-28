<?php require_once "controllers/calendar-controller.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lhp8Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="text-center">
        <h1>Calendrier LHP8</h1>
        <h2><a class="btn"><i class="bi bi-chevron-double-left me-2"></i></a><?= $year ?><a class="btn"><i class="bi bi-chevron-double-right ms-2"></i></a></h2>
        <h2><a class="btn"><i class="bi bi-chevron-left me-1"></i></a><?= $monthLetters ?><a class="btn"><i class="bi bi-chevron-right ms-1"></i></a></h2>
    </div>
    <div class="row justify-content-center p-0 mt-3 mx-0">
        <div class="col-10 calendar p-0 m-0">

            <!-- Nous réalisons une boucle pour afficher les jours de la semaine -->
            <?php
            foreach ($days as $key => $value) { ?>
                <div class="text-center text-light bg-dark"><?= $value ?></div>
            <?php } ?>


            <!-- Nous allons dessiner le nombre de cases correspondant au total de cases nécessaires au calendrier -->
            <?php
            for ($i = 1; $i <= $totalCases; $i++) { ?>
                <div class="text-center border border-dark"><?= $i ?></div>
            <?php } ?>

        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>