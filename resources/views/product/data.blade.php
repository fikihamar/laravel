<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk</title>
    @include('sweetalert::alert')
</head>
<body>
    <h1>Data Produk</h1>
    <br>
<a href="{{route('category-data')}}">Data Kategori</a>
    <br><br>
<a href="{{route('add-product')}}">Tambah Data</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Opsi</th>
        </tr>
        @forelse ($productData as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->stock}}</td>
            <td>{{$item->category->name}}</td>
            <td>
            <a href="{{route('edit-product',$item->id)}}">Edit</a>
            <form action="{{route('delete-product',$item->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Tidak Ada Data</td>
        </tr>
        @endforelse
    </table>
</body>
</html>