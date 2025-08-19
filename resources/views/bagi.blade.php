<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagi Blade</title>
</head>
<body>
    <h1>Bagi Data</h1>
    <form action="{{route('store_bagi')}}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="number" name="angka1">
        <br><br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2">
        <br><br>
        <button type="submit">Prosess</button>
    </form>
    <h3>Jumlahnya :{{$jumlah ?? 0}}</h3>
</body>
</html>
