<?php
$link = false;

function openDB() 
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "db");
    mysqli_query($link, "SET NAMES UTF8");
}

function closeDB() 
{
    global $link;
    mysqli_close($link);
}

function getAllContragents($limit) 
{
    global $link;
    openDB();

    $res = mysqli_query($link, "SELECT * FROM a LIMIT $limit");

    $contragents = mysqli_fetch_all($res, MYSQLI_ASSOC);
    closeDB();
    return $contragents;
}

if (isset($_GET['limit'])) {
    $limit = $_GET['limit'];
    $contragents = getAllContragents($limit);
    foreach ($contragents as $contragent) {
        echo "<tr><td>{$contragent['id']}</td><td>{$contragent['name']}</td></tr>";
    }
}
?>
