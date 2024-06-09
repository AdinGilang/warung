<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM warung_gilang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar menu</title>
</head>
<body>
    <h1> Daftar menu</h1>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Menu</td>
            <td>Email</td>
            <td>ACTION</td>
        </tr>
    <?php foreach($query as $menu) {?>
        <tr>
            <td><?php echo $menu["nama"] ?></td>
            <td><?php echo $menu["merk"] ?></td>
            <td><?php echo $menu["email"] ?></td>
            <td>
                <a href=<?php echo "edit-menu.php?id=" . $menu["id"]?>>EDIT</a>
                <a href=<?php echo "delete-menu.php?id=" . $menu["id"]?>>DELETE</a>
            </td>
        </tr>
        
    <?php } ?>
    </table>
    <br>
    <a href="./tambah-menu.php">Tambah Data menu</a>
    <br>
    <a href="./index.php">Kembali Ke Halaman Utama</a>
</body>
</html>