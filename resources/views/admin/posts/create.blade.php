@extends('layouts.admin')

@section('page_title')
    Create a new project
@endsection

@section('content')
    <section class="container pt-5 pb-5">
        <h1 class="fw-bold pb-4">Create a new project!</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- image preview --}}
            <div class="media me-4 mb-4">
                <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" aria-describedby="imageHelp" required>
                <div id="imageHelp" class="form-text">Insert a image!</div>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    id="title" aria-describedby="titleHelp" minlength="3" maxlength="255" required>
                <div id="titleHelp" class="form-text">Insert a title!</div>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="technology_id" class="form-label fw-bold">Technology</label>
                <select name="technology_id" id="technology_id"
                    class="form-select @error('technology_id') is-invalid @enderror" required>
                    <option selected>Open this select menu!</option>
                    @foreach ($technologies as $technology)
                        <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                    @endforeach
                </select>
                <div id="technologyHelp" class="form-text">Insert a technology!</div>
                @error('technology_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label fw-bold">Body</label>
                <div>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="193"
                        rows="7" minlength="3" minlength="3" maxlength="200" required>
                    </textarea>
                </div>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-label fw-bold">Collaborators</div>
                @foreach ($collaborators as $collaborator)
                    <div>
                        <input name="collaborators[]" class="form-check-input" type="checkbox"
                            value="{{ $collaborator->id }}" id="collaborators">
                        <label class="form-check-label px-2" for="collaborators">
                            {{ $collaborator->name }}
                            {{ $collaborator->surname }}
                        </label>
                    </div>
                @endforeach
                <div class="form-text">Insert the collaborators!</div>
                @error('collaborators')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-outline-dark text-uppercase">Submit</button>
                <button type="reset" class="btn btn-outline-dark text-uppercase">Reset</button>
            </div>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </section>
@endsection
