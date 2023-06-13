@extends('layouts.admin')

@section('page_title')
    Collaborators
@endsection

@section('content')
    <div class="container">
        <div class="text-center pt-5 pb-5">
            <h1 class="fw-bold text-primary text-uppercase fst-italic">Collaborators</h1>
            <h2 class="text-secondary">GitHub Profiles</h2>
        </div>
        <div class="row pb-5">
            @foreach ($collaborators as $collaborator)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4 mb-4">
                    <div class="card w-100 mx-auto">
                        <div class="card-body">
                            <div class="card-image">
                                <a href="#">
                                    <img class="img-fluid" src="{{ $collaborator['image'] }}"
                                        alt="{{ $collaborator['name'] }}">
                                </a>
                            </div>
                            <div class="card-title text-uppercase fw-bold text-center pt-2">
                                <a href="#" class="text-decoration-none text-dark">
                                    {{ $collaborator['name'] }}
                                    {{ $collaborator['surname'] }}
                                </a>
                            </div>
                            <div class="card-text text-center">
                                <div>Email Address: <span class="text-secondary">{{ $collaborator['email'] }}</span></div>
                                <div>GitHub Username:
                                    <span class="text-secondary">{{ $collaborator['username'] }}</span>
                                </div>
                            </div>
                            <div class="text-center pt-3">
                                <a href="#"><i class="fa-brands fa-github fs-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
