<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form action="../user/tambah_simpan" method="post">
        {{ csrf_field() }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label for="">Password</label>
        <input type="text" name="password" placeholder="Masukkan Password">
        <br>
        <label for="">Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level">
        <br> <br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>