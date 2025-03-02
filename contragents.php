<?php
$link=false;

function openDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "db");
    mysqli_query($link,"SET NAMES UTF8");
}

function closeDB() 
{
    global $link;
    mysqli_close($link);
}

function getAllInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link,"SELECT * FROM a");
    closeDB();
    return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
?>