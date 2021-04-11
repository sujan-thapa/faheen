@extends('layouts.layout')

@section('title','Login')
@section('css','/css/site/app.css')

{{-- @endsection --}}
@section('content')
{{-- login form --}}
    <div class="content">
        <h3>Sign In</h3>
        <form action="/login" method="post" enctype="multipart/form-data">
            @csrf

            {{-- <input type="email" name="email" id="email"> --}}

            <label for="email">Email</label><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email Address"><br><br>
            <label for="password">Password</label><br><br>
            <input type="password" id="password" name="password" placeholder="Enter your password"><br><br>
            <button type="submit">LOGIN</button>


            {{-- <label><b>User Name</b></label>
                <input type="text" name="username" id="username" placeholder="Username">
                <br><br>
                <label><b>Password
                </b>
                </label>
                <input type="Password" name="password" id="password" placeholder="Password">
                <br><br>
                <input type="button" name="log" id="log" value="Login">
                <br><br> --}}
        </form>
    </div>

@endsection
