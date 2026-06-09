<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

<h1>Header Laravel</h1>

<ul>
    @section('sidebar')
        <li>HTML</li>
        <li>CSS</li>
    @show
</ul>

<div>
    @yield('content')
</div>

</body>
</html>