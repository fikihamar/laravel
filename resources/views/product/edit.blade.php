<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
<a href="{{route('product-data')}}">Kembali</a>
<form action="{{route('save-product'),$data->id}}" method="POST">
        @method('PUT')
        @csrf
<input type="text" name="name" placeholder="Nama Produk" value="{{$data->name}}">
<input type="number" name="stock" placeholder="Stok Produk" value="{{$data->stock}}">
        <select name="category" id="">
             <option disabled>Select Option</option>
             @forelse ($categoryData as $item)
             <option value="{{$item->id}}"
                 @if ($data->category->name==$item->name)
                     selected
                @endif
                ></option>
             @empty
             <option disabled>Tidak Ada Kategori</option>
             @endforelse
        </select>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>