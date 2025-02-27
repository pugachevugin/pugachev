<?php
include "db_functions.php";
$contragents = getAllContragents();
?>

        <?php
        for ($i = 0; $i < count($contragents); $i++) {
            $id = $contragents[$i]["id"];
            $name = $contragents[$i]["name"];
   
            echo "<tr><td>$id</td><td>$name</td></tr>";
        }
        ?>
