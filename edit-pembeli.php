<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT *FROM pembeli WHERE id=$id");
    $pembeli = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $jajan = $_POST["jajan"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE pembeli SET nama='$nama',
    jajan='$jajan', email='$email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT pembeli </title>
</head>
<body>
    <h1>FORM EDIT PEMBELI</h1>

    <!--  REQUEST: GET, POST, PUT, PATCH-->
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $pembeli['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="jajan">jajan</label>
        <input value="<?php echo $pembeli['jajan'] ?>" type="text" id="jajan" name="jajan">
        <br>
        <br>
        <label for="email">Email</label>
        <input value="<?php echo $pembeli['email'] ?>" type="email" id="email" name="email">

        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./pembeli.php">Kembali ke halaman pembeli</a>
</body>
</html>
