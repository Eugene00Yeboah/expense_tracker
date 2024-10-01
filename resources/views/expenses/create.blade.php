@extends('layout.master')

@section('title', 'Add New Expense')

@section('content')
<div class="container">
    <h1>Add New Expense</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('expenses.store') }}" method="POST">
        @include('expenses.form', ['buttonText' => 'Add Expense'])
    </form>
</div>
@endsection
