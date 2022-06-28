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

// $year = l'année, $monthNumber = la date en Chiffre, $monthLetters = la date en Lettres,
$year = date('Y');
$monthNumber = date('n');
$monthLetters = date('F');
// On utilise cal_days_in_month pour calculer le nombre de jours dans le mois (cal_gregorian, mois, année)
$totalDaysinMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);

// on utilise mktime pour trouver le timestamp du premier jour du mois exemple : mktime (Heure, Minute, Seconde, Mois, Jour, Année)
$firstDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, 1, $year));
$lastDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, $totalDaysinMonth, $year));

$totalCases = ($firstDayinMonth - 1) + $totalDaysinMonth + (7 - $lastDayinMonth);

// Nous allons calculer le timestamp de la 1ère case du calendrier 
$firstCaseTimestamp = strtotime(date("$year-$monthNumber-1") . '-' . ($firstDayinMonth - 1) . 'days');

// nous allons créer une fonction pour créer une case dans le calendrier 
// la fonction prend en compte trois paramètres : firstCaseTimestamp, le numéro de la case et le mois
function createCase($firstCaseTimestamp, $caseNumber, $month)
{
    $timestamp = strtotime(date('Y-m-d', $firstCaseTimestamp) . '+' . ($caseNumber - 1) . 'days');
    return '<div class ="border border-dark text-center">' . date('j', $timestamp) . '</div>';
}
