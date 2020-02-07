@extends('layouts.customapp')

@section('title', 'Kernel Ninjas - Sommario')

@section('navbar')
@parent
@endsection



@section('summary')
<div class="container" style="background-color:white; border-radius:10px;">
@if($argument)
<h1>{{ $argument->title }}</h1>
<hr>
<p class="mb-5" style="font-size:24px;">
@foreach($articles as $article)
<h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
<hr>
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
