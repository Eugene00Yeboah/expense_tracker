<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Income Added</title>
    <style>
        .container { max-width: 600px; margin: auto; }
        .card { border: 1px solid #ddd; border-radius: 5px; }
        .card-header { padding: 10px; color: #fff; }
        .card-body { padding: 20px; }
        .card-footer { padding: 10px; color: #6c757d; }
        .bg-primary { background-color: #0d6efd; }
        .bg-danger { background-color: #dc3545; }
        .bg-success { background-color: #198754; }
        .text-white { color: #fff; }
        .text-muted { color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title">New Income Added</h4>
            </div>
            <div class="card-body">
                <p><strong>Amount:</strong> {{ $income->amount }}</p>
                <p><strong>Source:</strong> {{ $income->source }}</p>
                <p><strong>Date:</strong> {{ $income->date->format('F j, Y') }}</p>
                <p>Thank you for keeping track of your finances with our system!</p>
            </div>
            <div class="card-footer text-muted">
                <p>Best Regards,</p>
                <p>Your Expense Tracker Team</p>
            </div>
        </div>
    </div>
</body>
</html>
