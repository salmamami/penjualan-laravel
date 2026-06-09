<!DOCTYPE html>
<html>
<head>
    <title>Laravel Saya</title>
</head>
<body>
    <h3>Data Produk</h3>

    <a href="/produk/create">Tambah Produk</a>

    <table border="1">
    <tr>
       <th>No</th>
       <th>Nama</th>
       <th>Kategori</th>
       <th>Qty</th>
       <th>Harga Beli</th>
       <th>Harga Jual</th>
       <th>Aksi</th>
    </tr>

    @foreach ($produk as $i => $p)
    <tr>
       <td>{{ $i+1 }}</td>
       <td>{{ $p->nama }}</td>
       <td>{{ $p->kategori }}</td>
       <td>{{ $p->qty }}</td>
       <td>{{ $p->harga_beli }}</td>
       <td>{{ $p->harga_jual }}</td>
       <td>
          <a href="/produk/edit/{{ $p->id }}">Edit</a>
          |
          <a href="/produk/delete/{{ $p->id }}"
            onclick="return confirm('Yakin hapus?')">
            Hapus
         </a>
       </td>
    </tr>
    @endforeach

    </table>
</body>
</html>