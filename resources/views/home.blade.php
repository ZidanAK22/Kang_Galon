@extends('layouts.main')

@section('title')
    Kang Galon | {{ $title }}
@endsection

@section('home_top')
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ $image }}" class="d-block w-100" alt="..." height="500px">
        </div>
        <div class="carousel-item">
            <img src="{{ $image2 }}" class="d-block w-100" alt="..." height="500px">
        </div>
        <div class="carousel-item">
            <img src="{{ $image }}" class="d-block w-100" alt="..." height="500px">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('container')    

    <h1> Kang Galon goodness straight to your home. </h1>
    <h3> {{ $name }} </h3>
    <p> {{ $email }} </p>
    <img src="{{ $image }}" alt="{{ $name }}">

@endsection