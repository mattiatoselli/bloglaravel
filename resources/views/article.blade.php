@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection



@section('summary')
<div class="container" style="background-color:white; border-radius:10px;padding:20px;">
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
