<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data User</title>
</head>
<body>
    <h2>Form Ubah Data User</h2>
    <a href="../">Kembali</a>
    <br><br>
    <form action="../ubah_simpan/{{ $data->user_id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
            <br>
            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama" value="{{ $data->username }}">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->username }}">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->username }}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>
</html>