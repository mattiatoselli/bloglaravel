<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection

@section('summary')
    <a href="#1">This is my body ssss.</a><br>
    <p>This is my body sssss.</p><br>
    <p>This is my body conssssstent.</p><br>
    <p>This is my body ss.</p><br>
    <p>This is my body contentssss.</p><br>
    <p>This is my body content.</p><br>
@endsection

@section('about')
@parent
@endsection

@section('content')
    <hr id="1">
    <strong>
    strong
    </strong>
    </hr>
    <p class="mb-5">
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque pretium dapibus quam cursus venenatis. Praesent hendrerit molestie enim, at dignissim metus egestas eu. Proin massa sapien, laoreet nec congue vel, feugiat eu tellus. Etiam interdum leo id massa imperdiet tempus. Nullam malesuada semper congue. Etiam luctus nisl ac porta malesuada. Phasellus sollicitudin ligula vitae diam consequat, et semper nisl ultricies. Nullam tincidunt maximus elit, ut bibendum elit eleifend volutpat. Quisque ultrices, leo sit amet volutpat pretium, arcu diam vehicula tellus, ac iaculis urna lectus quis quam. Proin cursus magna id tincidunt faucibus. Sed sodales facilisis tristique. 
    </p>
@endsection

@section('footer')
@parent
@endsection
