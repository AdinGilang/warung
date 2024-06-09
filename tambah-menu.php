<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $nama =$_POST["nama"];
        $merk =$_POST["merk"];
        $email =$_POST["email"];
    

        $query = mysqli_query($db, "INSERT INTO warung_gilang VALUES(
            NULL, '$nama', '$merk', '$email'
        )");
        var_dump($query);
        }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM TAMBAH MENU</title>
    </head>
    <body>
        <h1>FORM TAMBAH DATA MENU</h1>
        <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="merk"> merk</label>
        <input type="text" id="merk" name="merk">
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