@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <header class="hero-header" id="hero-header">
        <video class="hero-header__video" poster="{{ asset('video/poster.jpg') }}" autoplay muted loop playsinline>
            <source src="{{ asset('video/pili-video.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-header__overlay"></div>
        <div class="container">
            <div class="hero-header__content">
                <img class="hero-header__logo" src="{{ asset('img/logo.svg') }}" alt="Holsfaller">
                <p class="hero-header__tagline">Профессиональные ленточные пилы <br>Европейского качества</p>
                <a class="hero-header__phone" href="tel:+79192707805">+7 919 270-78-05</a>
                <a class="button hero-header__cta" href="#order">Заказать</a>
            </div>
        </div>
    </header>

@endsection

