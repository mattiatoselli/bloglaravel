<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('summary')
    <p>This is my body ssss.</p><br>
    <p>This is my body sssss.</p><br>
    <p>This is my body conssssstent.</p><br>
    <p>This is my body ss.</p><br>
    <p>This is my body contentssss.</p><br>
    <p>This is my body content.</p><br>
@endsection


@section('content')
    <p>This is my body content.</p><br>
    <p>This is my body content.</p><br>
    <p>This is my body content.</p><br>
    <p>This is my body content.</p><br>
    <p>This is my body content.</p><br>
    <p>This is my body content.</p><br>
@endsection

@section('footer')
@parent

    <p>This is appended to the master sidebar.</p>
@endsection
