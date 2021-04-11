@extends('layouts.dashboard')

@section('title','Booking System')

@section('css','/css/dashboard/app.css')



@section('id','bodyId')

@section('content')

{{-- for dynamic profiles --}}
@foreach($user as $key => $value)
                {{-- <p> {{ $value->email }} </p>
                <p> {{ $value->name }} </p>
                <img id="for" src="{{asset('/images/user/')}}/{{$value->image}}" alt="vg"> --}}
@endforeach


<div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    {{-- <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>

                        <a href="#" class="nav__logo">Booking System</a>
                    </div> --}}


                    {{-- for profile image --}}


                    <div class="profileImage">
                        <i name="menu-outline" class="nav__toggle material-icons" id="toggleId">toc</i>
                        <a href="#">
                        <img id="profileImage" src="{{asset('/images/user/')}}/{{$value->image}}" alt="Admin" width="40">
                        </a>
                    </div>
                    <hr>
                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                            {{-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> --}}
                            <i name="home-outline" class="nav_icon material-icons" >home</i>
                            <span class="nav__name ">Dashboard</span>
                        </a>
                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> --}}
                            <i name="chatbubbles-outline" class="nav_icon material-icons" >inbox</i>

                            <span class="nav__name">Booking Request</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i name="chatbubbles-outline" class="nav_icon material-icons" >local_taxi</i>
                            <span class="nav__name">Vehicles</span>
                        </a>

                        <div  class="nav__link collapse">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Vehicles</span>
                        </div>

                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> --}}
                            <i name="pie-chart-outline" class="nav_icon material-icons" >info</i>

                            <span class="nav__name">Customer Info</span>
                        </a>

                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> --}}
                            <i name="pie-chart-outline" class="nav_icon material-icons" >info</i>

                            <span class="nav__name">Driver Info</span>
                        </a>
                        <a href="#" class="nav__link">
                            {{-- <ion-icon name="settings-outline" class="nav__icon"></ion-icon> --}}
                            <i name="settings-outline" class="nav_icon material-icons" >settings</i>

                            <span class="nav__name">Settings</span>
                        </a>
                    </div>

                </div>
                <a href="/logout" class="nav__link">
                    {{-- <ion-icon name="log-out-outline" class="nav__icon"></ion-icon> --}}
                    <i name="log-out-outline" class="nav_icon material-icons" >logout</i>
                    <span class="nav__name">Log Out</span>
                </a>

            </nav>
</div>

        {{-- for card view of boocing request, cust, driver and vehicles info --}}

        <div class="container">

            {{-- for testing dynamic nature of dashboard --}}
            {{-- <h1>vg</h1>
            @foreach($user as $key => $value)
                <p> {{ $value->email }} </p>
                <p> {{ $value->name }} </p>
                <img id="for" src="{{asset('/images/user/')}}/{{$value->image}}" alt="vg">
            @endforeach --}}


            <div class="row">
            <div class="column">
                <div class="card">
                    <img src="/images/dashboardIcons/request.png" alt="">

                    <h3>Booking Request</h3>
                    {{-- <p>dss</p>
                    <p>sssss</p> --}}
                </div>
            </div>
            <div class="column second">
                <div class="card">
                    <img src="/images/dashboardIcons/ccar.png" alt="">
                    <h3>Vehicles</h3>
                    {{-- <p>dss</p>
                    <p>sssss</p> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="/images/dashboardIcons/information.png" alt="">

                    <h3>Customer Info</h3>

                    {{-- <p>dss</p>
                    <p>sssss</p> --}}
                </div>
            </div>
            <div class="column second">
                <div class="card">
                    <img src="/images/dashboardIcons/information.png" alt="">
                    <h3>Driver Info</h3>
                    {{-- <p>dss</p>
                    <p>sssss</p> --}}
                </div>
            </div>
        </div>

        </div>










@endsection
