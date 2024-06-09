<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query =  mysqli_query($db, "DELETE FROM menu WHERE id=$id");

    header("Location: menu.php");
    