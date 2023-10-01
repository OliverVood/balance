@extends('layouts.admin')
@section('main')
    <div><a href="{{ route('income.create') }}" class="btn btn-primary mb-3">New</a></div>
    @foreach($incomes as $income)
        <div><a href="{{ route('income.show', $income->id) }}">{{ $income->amount }}</a></div>
    @endforeach
    <div class="mt-3">
        {{ $incomes->withQueryString()->links() }}
    </div>
@endsection
