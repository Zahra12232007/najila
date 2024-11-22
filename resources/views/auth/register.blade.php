@extends('auth.layout')

@section('content')
<h1>Register</h1>
<a href="{{route('login')}}">Login</a>
<br><br>
<form action="{{Route('store') }}" method="POST">

@cstf
<label>Nama Lengkap</label><br>
<input type="text" id="name" name="name" value="{{ old('nama') }}"><br>

@if ($errors->has('nama'))
<span Class="text-denger">{{$errors->first('name')}}</span>
@endif

<br>
<label>Email Address</label><br>
<input type="email" id="email" name="email" value="{{ old('email') }}"><br>

@if ($errors->has('email'))
<span tyoe="text-denger">{{$errors->first('email')}}</span>
@endif

<br>
<label>Password</label><br>
<input type="passeord" name="password"><br>

@if ($errors->has('password'))
<span class="text-dengar">{{$errors->first('pasword')}}</span>
@endif

<br>
<label for="password_confirmation" class="col-md-4 col-from-label text-md-end text-md-end text-start">confirm password</label>
<div class="col-md-6">
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
</div>
<input type="submit" value="register">
</form>
@endsection