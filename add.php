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

    <form action="insert.php" method="post" >
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="nama" >
        <label for="umur">Umur</label>
        <input type="number" name="umur" placeholder="umur">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat" ></textarea>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Male">male</option>
            <option value="Female">female</option>
        </select>
        <button type="submit" >Submit</button>
        <a href="index.php" type="button">kembali</a>
    </form>
    
</body>
</html>