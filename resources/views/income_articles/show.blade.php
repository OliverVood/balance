@extends('layauts.main')
@section('main')
    <div>
        <a href="{{ route('income_article.index') }}">List</a>
        <a href="{{ route('income_article.edit', $article->id) }}">Edit</a>
        <form action="{{ route('income_article.delete', $article->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        <a href="">Delete</a>
    </div>
    <div>
        <div>{{ $article->name }}</div>
        <div>{{ $article->description }}</div>
    </div>
@endsection
