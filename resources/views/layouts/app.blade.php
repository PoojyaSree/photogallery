<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHOTO GALLERY</title>

</head>
<style>
.body{
    background:url('css\album.jpg');
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css">
<body>
@include('inc.topbar')
<br>

<div class="row">
@include('inc.messages')
@yield('content')
</body>
</html>