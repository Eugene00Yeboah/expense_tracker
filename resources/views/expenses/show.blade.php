@extends('layouts.master')

@section('title', 'Expense Details')

@section('content')
<div class="container">
    <h1>Expense Details</h1>

    <div class="card mt-3">
        <div class="card-header">
            {{ $expense->title }}
        </div>
        <div class="card-body">
            <p><strong>Amount:</strong> ${{ number_format($expense->amount, 2) }}</p>
            <p><strong>Category:</strong> {{ $expense->category ?? 'N/A' }}</p>
            <p><strong>Date:</strong> {{ $expense->expense_date->format('F j, Y') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('expenses.destroy', $expense) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary float-end">Back to List</a>
        </div>
    </div>
</div>
@endsection
