<!DOCTYPE html>
<html>
<head>
    <title>New Expense Added</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h4 class="card-title">New Expense Added</h4>
            </div>
            <div class="card-body">
                <p>Dear {{ Auth::user()->name }},</p>
                <p>Your new expense entry has been successfully recorded:</p>
                <ul>
                    <li><strong>Title:</strong> {{ $expense->title }}</li>
                    <li><strong>Amount:</strong> ${{ number_format($expense->amount, 2) }}</li>
                    <li><strong>Category:</strong> {{ $expense->category }}</li>
                    <li><strong>Date:</strong> {{ $expense->expense_date->format('F j, Y') }}</li>
                </ul>
                <p>Manage your expenses and view detailed reports by clicking the button below:</p>
                <a href="{{ route('expenses.index') }}" class="btn btn-secondary">View Your Expenses</a>
            </div>
            <div class="card-footer text-muted">
                We appreciate your use of our Expense Tracker. If you need assistance, don't hesitate to reach out.
            </div>
        </div>
    </div>
</body>
</html>
