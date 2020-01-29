@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection



@section('summary')
<div class="container" style="background-color:white; border-radius:10px;">
<h1>{{ $article->title }}</h1>
<p class="mb-5" style="font-size:24px;">
{{!! $article->body !!}}
</p>
</div>
@endsection

@section('footer')
@parent
@endsection
