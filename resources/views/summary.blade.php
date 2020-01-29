@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection



@section('summary')
<div class="container" style="background-color:white; border-radius:10px;">
@if($argument)
<h1>{{ $argument->title }}</h1>
<p class="mb-5" style="font-size:24px;">
@foreach($articles as $article)
<li><a href="/article/{{ $article->id }}">{{ $article->title }}</a></li>
@endforeach()
</p>
@else
<p>
Nothing for you here stranger!
</p>
@endif
</div>
@endsection

@section('footer')
@parent
@endsection
