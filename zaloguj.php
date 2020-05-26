XD

<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))) {
    header('Location: index.php');
    exit();
}


include("php/baza_danych.php");
$Baza = new baza_danych('s19615', 'Jak.Kwia', 'localhost', 's19615');


$login = $_POST['login'];
$haslo = $_POST['haslo'];

$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

$result = $Baza->select_clear("SELECT * FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'");

$ilu_userow = mysqli_num_rows($result);


if ($ilu_userow > 0) {
    $_SESSION['zalogowany'] = true;
    unset($_SESSION['blad']);

    $row = mysqli_fetch_row($result);
    $pasazer_pk = $row[0];



    //print_r ($row);

    $dane = $Baza->select("SELECT imie, nazwisko,pesel, narodowosc FROM pasazer WHERE pasazer_pk ='$pasazer_pk'");
    print_r($dane);
    $imie = $dane[0][0];
    $nazwisko = $dane[0][1];
    $pesel = $dane[0][2];
    $narodowosc = $dane[0][3];

    $_SESSION['imie'] = $imie;
    $_SESSION['nazwisko'] = $nazwisko;
    $_SESSION['pesel'] = $pesel;
    $_SESSION['narodowosc'] = $narodowosc;

    header('Location: main.php');
}


else {
    header('Location: index.php');
}


