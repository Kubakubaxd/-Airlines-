<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>
<div id="container">


    <?php
    include("php/baza_danych.php");
    include "php/generate_table.php";
    $site = 'pasazer';
    $table_name = 'pasazer';
    $table_id = 'pasazer_pk';
    $Baza = new baza_danych('s19615', 'Jak.Kwia', 'localhost', 's19615');

    $header = array('pasazer_pk','imie','nazwisko','pesel','narodowosc');
    $query = "SELECT * FROM pasazer";
    $where = "";
    $order_by = "";


    if(isset($_GET['where0']))
    {
        $where_written = false;
        foreach ($header as $i => $h)
        {
            if($_GET["where$i"] != "") {
                if($where_written == false) {
                    $where = " WHERE ";
                    $where_written = true;
                }
                elseif ($where_written == true)
                    {
                        $where .= " AND ";
                    }
                $search = $_GET["where$i"];
                $where .= "$h LIKE ".'"'."%$search%".'"';
            }
        }
        $query .= $where;
        //echo " <br> $where <br>";
    }
    elseif (isset($_GET['where']))
    {
        $where = $_GET['where'];
        $query .= "$where";
        //echo " <br> $where <br>";
    }


    if(isset($_GET['order_by']))
    {
        if($_GET['order_by'] != ""){
        $order_by = $_GET['order_by'];
        $query .= " ORDER BY ".$order_by;
        }
    }

    echo $query;

    $dane = $Baza->select($query);

    generate_table_edit($header, $dane, $table_name, $table_id, $site, $order_by, $where);
    ?>
    </tbody>
    </table>
</div>
