@extends('layouts.customapp')
<style>
img {
    width: 100%;
    padding: 20px;
    vertical-align: middle;
}
</style>

@section('title', 'Kernel Ninjas')

@section('navbar')
@parent
@endsection



@section('summary')
<div class="container" 
    style="background-color: white;
    border-radius: 10px;
    padding: 14vw;
    margin-bottom: 10vw;
    box-shadow: 3px 3px 50px 8px black;
    font-size: larger;">
<h1 style="color:green;">{{ $article->title }}</h1>
<hr>
<p class="mb-5" style="font-size:24px;">
{!! $article->body !!}
</p>
</div>
@endsection

@section('footer')
@parent
@endsection
