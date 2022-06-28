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
    // nous allons calculer le timestamp de la case pour cela, on utilise la fonction strtotime 
    // strtotime (date('Y-m-d')) pour obtenir la date US Année / Mois / Jour, on rajoute la journée en fonction de la case d'où le -1
    $timestamp = strtotime(date('Y-m-d', $firstCaseTimestamp) . '+' . ($caseNumber - 1) . 'days');

    // Nous allons faire une condition pour griser les cases qui ne sont point du mois en cours
    // Condition pour colorer en bleu le jour J

    if (date('Y-m-d', $timestamp) == date('Y-m-d')) {
        return '<div class ="border border-dark text-center bg-info">' . date('j', $timestamp) . '</div>';
    } elseif (date('n', $timestamp) == $month) {
        return '<div class ="border border-dark text-center">' . date('j', $timestamp) . '</div>';
    } else {
        return '<div class ="border border-dark text-center bg-secondary">' . date('j', $timestamp) . '</div>';
    }
}
