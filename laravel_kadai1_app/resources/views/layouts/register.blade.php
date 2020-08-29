@extends('layouts.common')

@section('title', 'Register')

@section('content')
<table>
    <form action="" method="post">
        {{csrf_field()}}
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name"></td></tr>
        </tr>  

        <tr>
            <th>Email:</th>
            <td><input type="text" name="email"></td></tr>
        </tr>  

        <tr>
            <th>Password:</th>
            <td><input type="password" name="password"></td></tr>
        </tr>  

        <tr>
            <th>Confirm Password:</th>
            <td><input type="confimPassword" name="password"></td></tr>
        </tr>  

        <tr>
            <td><button type="submit" class="btn btn-primary">Register</button></td>
        </tr>
    </form>
</table>
@endsection