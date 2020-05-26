<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>
<div id="container">
    <?php
    include "php/create_final_table.php";
    $header = array('bagaz_pk', 'waga', 'pasazer_fk_bagaz');
    $query = "SELECT * FROM bagaz";
    $site = 'bagaz';
    $table_name = 'bagaz';
    $table_id = 'bagaz_pk';
    create_final_table($query, $header, $table_name, $table_id, $site);
    ?>
</div>
