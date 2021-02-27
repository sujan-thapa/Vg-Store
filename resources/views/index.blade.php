@extends('layouts.app')

@section('title','Login')

@section('navbar')
    @parent



    <div class="container-fluid">
        <h2>Login Page</h2><br>
        <div class="row">

        <div class="login">
            <form id="login" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <label><b>User Name
                </b>
                </label>
                <input type="text" name="username" id="username" placeholder="Username">
                <br><br>
                <label><b>Password
                </b>
                </label>
                <input type="Password" name="password" id="password" placeholder="Password">
                <br><br>
                <input type="button" name="log" id="log" value="Login">
                <br><br>
            </form>
        </div>
    </div>


@endsection
