<?php
include "html/menu1.html";
include "html/menu2.php";
include "html/menu3.html";
?>

<style>
    th, td {
        padding: 15px;
    }
</style>


<div id="container">
    <Table>
        <tr>
            <th> Kolor:</th>
            <FORM method="post">
                <th>
                    <select name="kolor">
                        <option value="domyslny">Domyślny</option>
                        <option value="czarny">Czarmy</option>
                        <option value="bialy">Biały</option>
                        <option value="niebieski">Niebieski</option>
                    </select>
                </th>
                <th>
                    <input type="submit" value="Zatwierdź">
                </th>
            </FORM>
        </tr>
</div>

<?php
if (isset($_POST['kolor'])) {
    $kolor = $_POST['kolor'];
    setcookie("kolor", "$kolor", time() + 60 * 60 * 60 * 24 * 365);
    header("location: opcje.php");
}