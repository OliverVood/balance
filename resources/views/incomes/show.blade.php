@extends('layouts.main')
@section('main')
    <div>
        <div class="pagination mb-3"><a href="{{ route('income.index') }}">List</a></div>
        <div class="manage mb-3">
            <a href="{{ route('income.edit', $income->id) }}" class="btn btn-primary">Edit</a>
            <form class="d-inline-block" action="{{ route('income.delete', $income->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
    <div>
        <div>
            <div class="fw-bold">Расход:</div>
            <div>{{ $income->amount }}</div>
        </div>
    </div>
@endsection
