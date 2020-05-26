<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>
    <div id="container">

<?php
session_start();
echo "Imie: ". $_SESSION['imie']."<p>";
echo "Nazwisko: ". $_SESSION['nazwisko']."<p>";
echo "Pesel: ". $_SESSION['pesel']."<p>";
echo "Narodowosc: ". $_SESSION['narodowosc']."<p>";





?>

