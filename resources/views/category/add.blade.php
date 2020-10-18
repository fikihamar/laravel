<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>
<h1>Tambah Kategori</h1>
<a href="{{route('category-data')}}">Kembali</a>
<form action="{{route('store-category')}}" method="post">
@csrf
<input type="text" name="name" placeholder="Nama Kategori">
<button type="submit">Simpan</button>
</form>
    
</body>
</html>