@extends('layauts.main')
@section('main')
    <?php
        $func = function($tag, $article) {
            foreach ($article->tags as $articleTag) {
                if ($articleTag->id === $tag->id) return true;
            } return false;
        };
    ?>
    <div>
        <a href="{{ route('income_article.index') }}">List</a>
    </div>
    <form action = "{{ route('income_article.update', $article->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $article->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">{{ $article->description }}</textarea>
        </div>
        <div class="mb-3">
            @foreach($tags as $tag)
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $func($tag, $article) ? 'checked="checked"' : '' }}>
                        {{ $tag->title }}
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

