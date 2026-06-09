<!DOCTYPE html>
<html>
<head>
    <title>Blade</title>
</head>
<body>

@if (count($produk) > 1)
    <h3>Perulangan FOREACH</h3>
    @foreach ($produk as $i => $v)
        <p>{{ $i }} - {{ $v }}</p>
    @endforeach
@else
    <p>Tidak ada data</p>
@endif

</body>
</html>