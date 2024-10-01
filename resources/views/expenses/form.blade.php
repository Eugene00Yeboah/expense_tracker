

@csrf

<div class="form-group mb-3">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $expense->title ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="amount">Amount</label>
    <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount', $expense->amount ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="category">Category</label>
    <input type="text" name="category" class="form-control" value="{{ old('category', $expense->category ?? '') }}">
</div>

<div class="form-group mb-3">
    <label for="expense_date">Date</label>
    <input type="date" name="expense_date" class="form-control" value="{{ old('expense_date', $expense->expense_date ?? '') }}" required>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

