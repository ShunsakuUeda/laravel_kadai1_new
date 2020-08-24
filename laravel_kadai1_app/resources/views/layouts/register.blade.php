@extends('layouts.common')

@section('title', 'Register')

@section('content')
<table>
    <form action="" method="post">
        {{csrf_field()}}
        <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
        <tr><td>Email:</td><td><input type="text" name="email"></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
        <tr><td>Confirm Password:</td><td><input type="confimPassword" name="password"></td></tr>
        <tr><td><button type="submit" class="btn btn-primary">Register</button></td></tr>
    </form>
</table>
@endsection