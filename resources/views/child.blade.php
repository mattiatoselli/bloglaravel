<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
@endsection

@section('summary')
    <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Collabora</a>
    </li>
@endsection

@section('content')
    <p class="mb-5">This is my body content.</p><br>
    <a href="#primo">vai al primo paragrafo</a>
@endsection

@section('footer')
@endsection
