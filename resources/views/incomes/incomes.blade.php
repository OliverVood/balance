@extends('layauts.main')
@section('main')
    @foreach($articles as $article)
        <div>{{ $article->name }}</div>
    @endforeach
@endsection

