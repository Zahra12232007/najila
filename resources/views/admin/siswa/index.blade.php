<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <h1>Data siswa</h1>
    <a href="{{ route('admin/dashboard') }}">menu utama</a><br>
    <br><br>
    <from id="logout-form" action="{{ route('logout') }}" methood="POST">
@csrf
</form>
<br><br>  
<from action="" method="get">
    <label>cari:</label>
    <input type="text" name="cari">
    <input type="submit" value+"cari">
</from>
<br><br>
<a href="{{ routr('siswa.create') }}">tambah siswa</a>

@if(sesstion::has('success'))
<div class="alert alert-success" role="alert">
    {{sesstion ::get('seccess')}}
</div>
@endif
</body>
</html>