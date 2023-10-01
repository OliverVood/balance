@extends('layouts.main')
@section('main')
	<?php
	$checkArticle = function ($tag, $article, $old) {
		foreach ($article->tags as $articleTag) {
			if (isset($old)) {
				if (in_array($tag->id, $old)) return true;
			} else {
				if ($articleTag->id === $tag->id) return true;
			}
		}
		return false;
	};
	?>
    <div>
        <a href="{{ route('income_article.index') }}">List</a>
    </div>
    <form action="{{ route('income_article.update', $article->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                   value="{{ old('name') ?? $article->name }}">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description"
                      placeholder="Description">{{ old('description') ?? $article->description }}</textarea>
        </div>
        <div class="mb-3">
            @foreach($tags as $tag)
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tags[]"
                               value="{{ $tag->id }}" {{ $checkArticle($tag, $article, old('tags')) ? 'checked' : '' }}>
                        {{ $tag->title }}
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

