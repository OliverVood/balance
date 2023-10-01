@extends('layouts.main')
@section('main')
    <div>
        <a href="{{ route('income_article.index') }}">List</a>
    </div>
    <form action="{{ route('income_article.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description"
                      placeholder="Description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            @foreach($tags as $tag)
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tags[]"
                               value="{{ $tag->id }}" {{ (old('tags') && in_array($tag->id, old('tags'))) ? 'checked' : '' }}>
                        {{ $tag->title }}
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

