@extends('layouts.common')

@section('title', 'Login')

@section('content')
<table>
    <form action="" method="post">
        {{csrf_field()}}
        <tr>
            <th>Email:</th>
            <td><input type="text" name="email"></td></tr>
        </tr>
        
        <tr>    
            <th>Password:</th>
             <td><input type="password" name="password"></td></tr>
        </tr>  

        <tr>
            <td><button type="submit" class="btn btn-primary">Login</button></td>
        </tr>
    </form>
</table>
@endsection