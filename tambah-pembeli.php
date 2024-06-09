<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $nama =$_POST["nama"];
        $jajan =$_POST["jajan"];
        $email =$_POST["email"];
    

        $query = mysqli_query($db, "INSERT INTO pembeli VALUES(
            NULL, '$nama', '$jajan', '$email'
        )");
        }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM TAMBAH PEMBELI</title>
    </head>
    <body>
        <h1>FORM TAMBAH DATA PEMBELI</h1>
        <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="jajan"> Jajan</label>
        <input type="text" id="jajan" name="jajan">
        <br>
        <br>
        <label for="email"> Email</label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    </body>
    </html>