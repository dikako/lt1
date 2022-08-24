<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Test Laravel</title>
</head>
<body>
<a href="{{route('test.index')}}">Menu Test</a>
<a href="{{route('matakuliah.index')}}">Menu Matkul</a>
<br>
<a href="{{route('test.create')}}">Buat Data</a>
<table border="1">
    <thead>
    <tr>
        <th>nama</th>
        <th>matkul</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($data) > 0)
        @foreach ($data as $item)
            <tr>
                <td>{{$item->nama}}</td>
                <td>{{$item->matkul}}</td>
                <td>
                    <a href="{{route('test.edit', $item->id)}}">Ubah Data</a>

                    <form action="{{route('test.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus Data</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="3">Data belum ada</td>
        </tr>
    @endif
    </tbody>
</table>
</body>
</html>
