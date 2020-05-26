<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>
<div id="container">
    <?php
    include "php/create_final_table.php";
    $header = array('stewardessa_pk', 'imie', 'nazwisko', 'pesel', 'narodowosc');
    $query = "SELECT * FROM stewardessa";
    $site = 'stewardessa';
    $table_name = 'stewardessa';
    $table_id = 'stewardessa_pk';
    create_final_table($query, $header, $table_name, $table_id, $site);
    ?>
</div>
