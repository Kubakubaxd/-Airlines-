<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>
<div id="container">
<?php
    include "php/create_final_table.php";
    $header = array('modele_samolotow_pk', 'marka', 'model', 'seria', 'przeznaczenie', 'produkcja_od', 'produkcja_do', 'liczba_miejsc', 'zasieg', 'pojemnosc');
    $query = "SELECT * FROM modele_samolotow";
    $site = 'modele_samolotow';
    $table_name = 'modele_samolotow';
    $table_id = 'modele_samolotow_pk';
    create_final_table($query, $header, $table_name, $table_id, $site);
    ?>
</div>
