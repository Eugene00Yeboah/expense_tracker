<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Expense Tracker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title">Welcome to Expense Tracker!</h4>
            </div>
            <div class="card-body">
                <p>Hello {{ $user->name }},</p>
                <p>Welcome aboard! We're excited to have you as a part of our Expense Tracker community. Start managing your finances with ease using our platform.</p>
                <p>To get started, click the button below:</p>
                <a href="{{ route('homepage') }}" class="btn btn-success">Get Started</a>
            </div>
            <div class="card-footer text-muted">
                Should you have any questions or need support, feel free to contact our team. We’re here to help!
            </div>
        </div>
    </div>
</body>
</html>
