<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
</head>

<body>
    <h1>Data Kategori</h1>
<a href="{{route('product-data')}}">Data Produk</a>
    <br>
<a href="{{route('add-category')}}">Tambah Data</a>
    <table class="table table-active">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Opsi</td>
        </tr>
        @forelse ($CategoryData as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}} </td>
            <td>
            <a href="{{route('edit-category',$item->id)}}">Edit</a>
            <form action="{{route('delete-category',$item->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
<tr>
    <td colspan="2">Tidak ada data</td>
</tr>
        @endforelse
    </table>
</body>

</html>