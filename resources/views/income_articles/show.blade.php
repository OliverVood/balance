@extends('layouts.main')
@section('main')
    <div>
        <div class="pagination mb-3"><a href="{{ route('income_article.index') }}">< List</a></div>
        <div class="manage mb-3">
            <a href="{{ route('income_article.edit', $article->id) }}" class="btn btn-primary">Edit</a>
            <form class="d-inline-block" action="{{ route('income_article.delete', $article->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
    <div>
        <div>
            <div class="fw-bold">Название:</div>
            <div>{{ $article->name }}</div>
        </div>
        <div>
            <div class="fw-bold">Описание:</div>
            <div><?= nl2br($article->description); ?></div>
        </div>
    </div>
@endsection
