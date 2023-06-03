<?php

include("connection.php");

$keyword = $_GET["keyword"];

$query = mysqli_query($conn, "SELECT * FROM `karyawan` WHERE nama LIKE '%$keyword%' LIMIT 10");
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

    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Search" >
        <button type="submit" >cari</button>
    </form>

    <table border="2">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>umur</th>
            <th>alamat</th>
            <th>jenis_kelamin</th>
            <th>Options</th>
        </tr>

        <?php foreach ($result as $r) : ?>
            <tr >
                <td><?php echo $r["id"] ?></td>
                <td><?php echo $r["nama"] ?></td>
                <td><?php echo $r["umur"] ?></td>
                <td><?php echo $r["alamat"] ?></td>
                <td><?php echo $r["jenis_kelamin"] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $r['id'] ?>" >edit</a>
                    <a href="delete.php?id=<?php echo $r['id'] ?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach ?>


    </table>

</body>

</html>