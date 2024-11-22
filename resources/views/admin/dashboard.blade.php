<!DOCTYPE html>
<html lang="en">

</head>
<meta charset="UTF-8">
<meta name="viewpotr" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin</title>
</head>

<body>
    <a href="{{ route('logout') }}" onlick="event.preventDefault(); document.getElementbyid('logout-form').submit();">Logout</a>
<form id= logout-form action="{{ route('logout') }}" method="POST">
    @csrf
</form>
<h1>Dashboard Admin</h1>
@if ($message = Session::get('success'))
<p>{{$message}}</P>
@else
<p>You are logged in!</p>
@endif

</body>

<footer>

</footer>

</html>