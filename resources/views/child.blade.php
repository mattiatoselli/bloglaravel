<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.customapp')

@section('title', 'Page Title')

@section('navbar')
@parent
@endsection

@section('summary')
    <!-- lista argomenti -->
    <div class="container" style="margin-top: 15vw;" id="argomenti">
                <div class="row">
                    @forelse ($arguments as $arg)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="avatar mx-auto white">
                                @if(isset($arg->image))
                                    <img src="{{ $arg->image }}" class="rounded-circle img-profile" alt="{{ $arg->title }} avatar">
                                @else
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51I1Tcg3B%2BL.jpg" class="rounded-circle img-profile" alt="{{ $user->name }} avatar">
                                @endif
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">
                                        <a href="/argument/{{ $arg->id }}">{{ $arg->title }}</a>
                                    </h4>
                                </div>
                            </div>
                            <!--Card-->
                        </div>
                        <!-- column -->
                  @empty
                    <p>No users</p>
                  @endforelse
                </div>
                <!--row-->
            </div>
            <!--container-->
    
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
