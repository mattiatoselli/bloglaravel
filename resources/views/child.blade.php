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

@section('footer')
@parent
@endsection
