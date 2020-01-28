@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection



@section('summary')
@if($argument)
<h1>{{ $argument->title }}</h1>
<p class="mb-5" style="font-size:24px;">
<li>lista articoli</li>
</p>
@else
<p>
Nothing for you here stranger!
</p>
@endsection

@section('footer')
@parent
@endsection
