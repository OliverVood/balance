@extends('layauts.main')
@section('main')
    <div>
        <a href="{{ route('income_article.index') }}">List</a>
    </div>
    <form action = "{{ route('income_article.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Name</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

