<!DOCTYPE html>
<html>
<head>
    <title>Laravel Saya</title>
</head>
<body>
    <h1>Data Pelanggan</h1>

    <table border="1">
    @foreach ($pelanggan as $i => $v)
    <tr>
      <td>{{ $i+1 }}</td>
      <td>{{ $v }}</td>
    </tr>
@endforeach
</table>
</body>
</html>