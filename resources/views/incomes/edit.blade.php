@extends('layauts.main')
@section('main')
    <div>
        <a href="{{ route('income.index') }}">List</a>
    </div>
    <form action = "{{ route('income.update', $income->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="article" class="form-label">Article</label>
            <select id="article" name="article_id" class="form-select" aria-label="Default select example">
                <option selected hidden>Select article</option>
                @foreach($articles as $article)
                    <option {{ $article->id === $income->article_id ? 'selected' : '' }} value="{{ $article->id }}">{{ $article->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount" value="{{ $income->amount }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

