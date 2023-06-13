@extends('layouts.app')

@section('page_title')
    Welcome to my portfolio
@endsection

@section('content')
    <div class="container py-5">
        <img src="img/logo.jpg" alt="portfolio_logo" class="w-100">
        <div class="text-center">
            <h1 class="fw-bold fs-3 text-uppercase pt-3">
                welcome to my portfolio
            </h1>
            <a class="btn btn-outline-dark mt-1 text-uppercase" href="{{ route('admin.posts.index') }}">go!</a>
        </div>
    </div>
@endsection
