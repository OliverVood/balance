@extends('layauts.main')
@section('main')
    <div>
        <a href="{{ route('income.index') }}">List</a>
    </div>
    <form action = "{{ route('income.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="article" class="form-label">Article</label>
            <select id="article" name="article_id" class="form-select" aria-label="Default select example">
                <option selected hidden>Select article</option>
                @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

