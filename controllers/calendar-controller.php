<?php

$days = [
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche'
];


$year = date('Y');
$monthNumber = date ('n');
$monthLetters = date ('F');

echo $monthNumber, $monthLetters;