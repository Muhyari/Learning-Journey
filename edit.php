<?php 
$id = $_GET["id"];
include("connection.php");

$query = mysqli_query($conn,"SELECT * FROM karyawan WHERE id='$id' ");
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
<style>

form {
    display: flex;
    height: 100vh;
    width: 25%;
    flex-direction: column;
    gap: 20px;
}

</style>
<body>

    <form action="update.php" method="post" >

        <input type="hidden" value="<?php echo $id ?>" name="id"  >

        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="nama" value="<?php echo $result
        [0]['nama'] ?>" >
        <label for="umur">Umur</label>
        <input type="number" name="umur" placeholder="umur" value="<?php echo $result
        [0]['umur'] ?>" >
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat" ><?php echo $result
        [0]['alamat'] ?></textarea>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Male <?php echo ($result[0]['jenis_kelamin'] == 'laki-laki' || $result[0]['jenis_kelamin'] == 'Male') ? 'selected' : '' ?> ">male</option>
            <option value="Female <?php echo ($result[0]['jenis_kelamin'] == 'Wanita' || $result[0]['jenis_kelamin'] == 'Female') ? 'selected' : '' ?> ">female</option>
        </select>
        <button type="submit" >Submit</button>
        <a href="index.php" type="button">kembali</a>
    </form>
    
</body>
</html>