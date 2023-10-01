@extends('layouts.main')
@section('main')
    <div><a href="{{ route('income_article.create') }}" class="btn btn-primary mb-3">New</a></div>
    @foreach($articles as $article)
        <div><a href="{{ route('income_article.show', $article->id) }}">{{ $article->name }}</a></div>
    @endforeach
@endsection
