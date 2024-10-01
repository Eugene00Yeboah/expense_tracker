@extends('layout.master')

@section('title', 'Incomes')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Incomes</h2>
    <a href="{{ route('incomes.create') }}" class="btn btn-primary mb-3">Add Income</a>
    @if ($incomes->isEmpty())
        <p>No income records found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Source</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                    <tr>
                        <td>${{ number_format($income->amount, 2) }}</td>
                        <td>{{ $income->source }}</td>
                        <td>{{ $income->date->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('incomes.edit', $income) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('incomes.destroy', $income) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

