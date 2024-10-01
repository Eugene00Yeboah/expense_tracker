@extends('layout.master')


@section('content')
<div class="container">
    <h1>Edit Expense</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('expenses.update', $expense) }}" method="POST">
        @method('PUT')
        @include('expenses.form', ['buttonText' => 'Update Expense'])
    </form>
</div>
@endsection
