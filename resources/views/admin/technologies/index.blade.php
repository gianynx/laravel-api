@extends('layouts.admin')

@section('page_title')
    Technologies
@endsection

@section('content')
    <div class="container">
        <div class="text-center pt-5 pb-5">
            <h1 class="fw-bold text-primary text-uppercase fst-italic">Technologies</h1>
        </div>
        <div class="row pb-5">
            @foreach ($technologies as $technology)
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4 mb-4">
                    <div class="card w-50 mx-auto">
                        <div class="card-body">
                            <div class="card-image">
                                <a href="#">
                                    <img class="img-fluid" src="{{ $technology['image'] }}" alt="{{ $technology['name'] }}">
                                </a>
                            </div>
                            <div class="card-title text-uppercase fw-bold text-center pt-2">
                                <a href="#" class="text-decoration-none text-dark">
                                    {{ $technology['name'] }}
                                </a>
                            </div>
                            <div class="card-text text-center">
                                <p>{{ $technology['body'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
