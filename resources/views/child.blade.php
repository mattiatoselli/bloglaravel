<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p class="mb-5">This is my body content.</p><br>
    <a href="#primo">vai al primo paragrafo</a>
@endsection