@extends('layout.master')

@section('title', 'Income Details')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Income Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Income Source: {{ $income->source }}</h5>
            <p class="card-text"><strong>Amount:</strong> ${{ number_format($income->amount, 2) }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $income->date->format('d-m-Y') }}</p>
            <a href="{{ route('incomes.edit', $income) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('incomes.destroy', $income) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('incomes.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
