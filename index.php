<?php

include("connection.php");
$query = mysqli_query($conn, "SELECT * FROM `karyawan` LIMIT 10");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="add.php">Tambah Data</a>

    <br>

    <table border="2">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>umur</th>
            <th>alamat</th>
            <th>jenis_kelamin</th>
        </tr>

        <?php foreach ($result as $r) : ?>
            <tr >
                <td><?php echo $r["id"] ?></td>
                <td><?php echo $r["nama"] ?></td>
                <td><?php echo $r["umur"] ?></td>
                <td><?php echo $r["alamat"] ?></td>
                <td><?php echo $r["jenis_kelamin"] ?></td>
            </tr>
        <?php endforeach ?>


    </table>

</body>

</html>