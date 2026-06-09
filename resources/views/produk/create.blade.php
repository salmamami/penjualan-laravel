<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h3>Tambah Produk</h3>

<form action="/produk/store" method="POST">

    @csrf

    Nama Produk :
    <br>
    <input type="text" name="nama" value="{{ old('nama') }}">
    @error('nama')
        <span style="color:red">
            {{ $message }}
        </span>
    @enderror

    <br><br>

    Kategori :
    <br>
    <select name="kategori">
        @foreach($kategori as $k)
            <option value="{{ $k->id }}">
                {{ $k->kategori }}
            </option>
        @endforeach
    </select>
    @error('kategori')
        <span style="color:red">
            {{ $message }}
        </span>
    @enderror

    <br><br>

    Qty :
    <br>
    <input type="number" name="qty" value="{{ old('qty') }}">

    @error('qty')
       <span style="color:red">
           {{ $message }}
        </span>
    @enderror

    <br><br>

    Harga Beli :
    <br>
    <input type="number" name="harga_beli" value="{{ old('harga_beli') }}">
    @error('harga_beli')
       <span style="color:red">
           {{ $message }}
        </span>
    @enderror

    <br><br>

    Harga Jual :
    <br>
    <input type="number" name="harga_jual" value="{{ old('harga_jual') }}">
    @error('harga_jual')
       <span style="color:red">
           {{ $message }}
        </span>
    @enderror

    <br><br>

    <button type="submit">Simpan</button>

</form>

<br>

<a href="/produk">Kembali</a>

</body>
</html>