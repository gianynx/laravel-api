@extends('layouts.admin')

@section('page_title')
    Projects
@endsection

@section('content')
    <div class="container">
        <div class="text-center pt-5 pb-5">
            <h1 class="fw-bold text-primary text-uppercase fst-italic">Projects</h1>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr class="fst-italic">
                    <th scope="col"></th>
                    <th scope="col" class="px-5">ID</th>
                    <th scope="col" class="fs-5 px-5">Image technology</th>
                    <th scope="col" class="px-5">Project title</th>
                    <th scope="col" class="px-5">Technology</th>
                    <th scope="col" class="px-5">Explore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row"></th>
                        <td class="px-5">{{ $post->id }}</td>
                        <td class="px-5"><img class="img-fluid w-25" src="{{ $post->image }}" alt="{{ $post->title }}">
                        </td>
                        <td class="fs-5 px-5">{{ $post->title }}</td>
                        <td class="fs-5 px-5">
                            @if ($post->technology_id)
                                {{ $post->technology->name }}
                            @endif
                        </td>
                        <td>
                            <div class="px-5">
                                <a href="{{ route('admin.posts.show', $post->slug) }}">
                                    <i class="fa-solid fa-eye fs-2"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-outline-dark text-uppercase mt-4" href="{{ route('admin.posts.create') }}">create a new
            project</a>
        {{ $posts->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
