@extends('layouts.common')

@section('title', 'Login')

@section('content')
<table>
<form action="" method="post">
{{csrf_field()}}
<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td><button type="submit" class="btn btn-primary">Login</button></td></tr>
</form>
</table>
@endsection