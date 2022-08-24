<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Test Laravel</title>
</head>
<body>
<a href="{{route('test.index')}}">Kembali</a>
<br>
<form action="{{route('test.update', $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama :</label>
    <input type="text" name="nama" value="{{$data->nama}}"><br>
    <label>Matkul :</label>
    <input type="text" name="matkul" value="{{$data->matkul}}"><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
