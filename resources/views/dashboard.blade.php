@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
                Hello {{ $name }}
            </h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        Show Options</button>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        @guest
        <a class="nav-link" href="{{route('user.registration')}}">Registration
        </a>
        <a class="nav-link" href="{{route('login')}}">Login</a>
        @else
        <a class="nav-link" href="{{route('blog.index')}}">Blogs</a>
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        @endguest
        </div>
    </div>

</div>
@endsection