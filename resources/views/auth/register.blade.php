@extends('layouts.layout')

@section('title','Register')


@section('css','/css/site/register.css')


@section('content')

{{-- For Register content --}}
<div class="content">
        <h3>Sign Up</h3>
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>

            <label for="image">Image</label>
            <input type="file" id="image" name="image" placeholder="Upload Photo"><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email Address"><br><br>

            {{-- <div class="row">
                <label for="age">Age</label>
                <label for="gender" id="gendder">Gender</label>
            </div> --}}

            {{-- for radio button(gender) and age --}}
            <div class="row">
                <div class="column">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" class="form-control" placeholder="Age">
                </div>
                <div class="column gender">
                    <label for="gender" id="gendder" >Gender</label>
                    {{-- <input type="text" class="form-control" placeholder="Age"> --}}
                    <div id="radioButton" class="row">
                        <input type="radio" name="gender" class="radioButtonn" value="Male">Male</input>
                        <input type="radio" name="gender" class="radioButtonn" value="Male">Female</input>

                        {{-- Male<input type="radio" name="Gender" class="radioButtonn" value="Male" />
                        Female<input type="radio" name="Gender" class="radioButtonn" value="Female" /> --}}

                    </div>

                </div>
            </div>


            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact" placeholder="Enter your contact number"><br><br>

            {{-- <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address"><br><br> --}}




            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"><br><br>
            <button type="submit">REGISTER</button>


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
