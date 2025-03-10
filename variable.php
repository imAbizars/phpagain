<?php
    $name = "Dennis Abizar";
    $username = "AsaAbizar";
    $umur = 21;
    $description = "I think I should learning PHP bcs everyting about learning";
    //cannot add string + string like "hallo" + "hallo"
    echo("Nama : $name");
    echo("<br>");
    echo("UserName : $username ");
    echo("<br>");
    echo("Umur : $umur");
    echo("<br>");
    echo("Description : $description");
    echo("<br>");
    echo("tambah-tambah");
    echo("<br>");
    echo("age + datenow(days) : ");
    echo ($umur + date("d"));
    echo("<br>");
    
    //it is dinamic variable
    $mykisah = "girlfriend";
    $$mykisah = "no i dont have girlfriend and yeah it seems like good";
    echo($girlfriend);
    
    //variable superglobal can take the variable in request URL
    echo("<br>");
    echo "Hello, " .($_GET['name']);
?>