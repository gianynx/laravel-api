@extends('layouts.admin')

@section('page_title')
    Project
@endsection

@section('content')
    <div class="container text-center">
        <div class="pt-5 pb-5">
            <h1><span class="text-secondary">Project name:</span> {{ $post->title }}</h1>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mx-auto w-50">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-100">
        </div>
        <div class="pt-5">
            <h2 class="text-secondary">Description</h2>
            <p class="fs-4 pt-2 pb-5">{{ $post->body }}</p>
        </div>
        <div class="pt-2">
            <h2 class="text-secondary">Technology:</h2>
            <div class="pb-5">
                @if ($post->technology_id)
                    <div class="fs-2">
                        <a class="text-decoration-none" href="{{ route('admin.technologies.index') }}">
                            {{ $post->technology->name }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div class="pt-2">
            <h2 class="text-secondary">Collaborators:</h2>
            <div class="pb-5">
                @if ($post->collaborators)
                    @foreach ($post->collaborators as $collaborator)
                        <div>
                            <a class="text-decoration-none" href="{{ route('admin.collaborators.index') }}">
                                {{ $collaborator->name }}
                                {{ $collaborator->surname }}
                            </a>
                        </div>
                    @endforeach
                @endif
                <div class="fs-5 pt-2">
                    <span>Do you want to add some collaborators?</span>
                    <i class="fa-solid fa-turn-down px-2"></i>
                </div>
            </div>
        </div>
        <div class="pb-5">
            <a class="btn btn-outline-dark text-uppercase" href="{{ route('admin.posts.edit', $post->slug) }}">
                edit this project
            </a>
            <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST" class="pt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger text-uppercase">delete this project</i></button>
            </form>
        </div>
    </div>
@endsection
