<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM pembeli");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembeli</title>
</head>
<body>
    <h1> Daftar Pembeli</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Jajan</td>
            <td>Email</td>
            <td>ACTION</td>
        </tr>
    <?php foreach($query as $pembeli) {?>
        <tr>
            <td><?php echo $pembeli["nama"] ?></td>
            <td><?php echo $pembeli["jajan"] ?></td>
            <td><?php echo $pembeli["email"]?></td>
            <td>   
                 <a href=<?php echo "edit-pembeli.php?id=" . $pembeli["id"]?>>EDIT</a>
                 <a href=<?php echo "delete-pembeli.php?id=" . $pembeli["id"]?>>DELETE</a> 
            </td>
        </tr>
        
    <?php } ?>
    </table>
    <br>
    <a href="./tambah-pembeli.php">Tambah Data Pembeli</a>
    <br>
    <a href="./index.php">kembali ke halaman utama</a>
</body>
</html>