@extends("layout.app")

@section("title", "Home")

@section("content")
<section id="home-section">
    @include("home.firstsection")
    @include("home.secondsection")
</section>