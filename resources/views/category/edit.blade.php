<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <a href="{{route('category-data')}}">Kembali</a>
    <form action="{{route('save-category',$data->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nama Kategori" value="{{$data->name}}">
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>