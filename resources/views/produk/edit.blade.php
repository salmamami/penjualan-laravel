<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h3>Edit Produk</h3>

<form action="/produk/update/{{ $produk->id }}" method="POST">

    @csrf

    Nama Produk :
    <br>
    <input type="text"
           name="nama"
           value="{{ $produk->nama }}">
    <br><br>

    Kategori :
    <br>
    <select name="kategori">

        @foreach($kategori as $k)

            <option value="{{ $k->id }}"
                @if($produk->id_kategori == $k->id)
                    selected
                @endif>

                {{ $k->kategori }}

            </option>

        @endforeach

    </select>

    <br><br>

    Qty :
    <br>
    <input type="number"
           name="qty"
           value="{{ $produk->qty }}">
    <br><br>

    Harga Beli :
    <br>
    <input type="number"
           name="harga_beli"
           value="{{ $produk->harga_beli }}">
    <br><br>

    Harga Jual :
    <br>
    <input type="number"
           name="harga_jual"
           value="{{ $produk->harga_jual }}">
    <br><br>

    <button type="submit">Update</button>

</form>

<br>

<a href="/produk">Kembali</a>

</body>
</html>