<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <a href="../public/user/tambah"> + Tambah User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Aksi</td>
            {{-- <th>Jumlah Pengguna</th> --}}
        </tr>
        @foreach ($data as $d )
            <tr>
                <td>{{ $d->user_id }} </td>
                <td>{{ $d->username }} </td>
                <td>{{ $d->name }} </td>
                <td>{{ $d->level_id }} </td>
                <td><a href="../public/user/ubah/{{ $d->user_id }}">Ubah</a> | <a href="../public/user/hapus/{{ $d->user_id }}">Hapus</a></td>
                {{-- <td>{{ $data }}</td> --}}
            </tr>
        @endforeach
    </table>
</body>
</html>
