<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
<h1>Aritmatika dasar</h1>
<br>
<a href="{{route('tambah')}}">Tambah</a>
<a href="{{route('kurang')}}">Kurang</a>
<a href="{{route('bagi')}}">Bagi</a>
<a href="{{route('kali')}}">Kali</a>
<br><br><br>

<h1>Data Pengguna</h1>
<table width="100%" border="1">
    <thead>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
        </thead>
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
        <tr>
            <td>{{$index += 1}}</td>
            <td>{{$user->name ?? ''}}</td>
            <td>{{$user->email ?? ''}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
