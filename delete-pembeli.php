<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query =  mysqli_query($db, "DELETE FROM pembeli WHERE id=$id");

    header("Location: pembeli.php");
    