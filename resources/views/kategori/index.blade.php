<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
</head>
<body>
<h2><b>Data Kategori Produk</b></h2>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Keterangan</th>
			<th>Dibuat</th>
			<th>Terakhir Diperbarui</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($kategori_produk as $i => $k)
		<tr>
			<td>{{ $i+1 }}</td>
			<td>{{ $k->kategori }}</td>
			<td>{{ $k->keterangan }}</td>
			<td>{{ $k->created_at }}</td>
			<td>{{ $k->update_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>