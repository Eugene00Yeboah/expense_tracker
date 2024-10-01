{{-- start nav --}}
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Expense Tracker App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                {{-- Check if the user is logged in --}}
                @auth
                    {{-- Show these links only when the user is authenticated (logged in) --}}
                    <a class="btn btn-primary me-2" href="{{ route('homepage') }}">Dashboard</a>
                    <a class="btn btn-secondary me-2" href="{{ route('expenses.index') }}">My Expenses</a>
                    <a class="btn btn-secondary me-2" href="{{ route('incomes.index') }}">Incomes</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endauth

                {{-- Show these links only when the user is not logged in --}}
                @guest
                    <a class="btn btn-primary me-2" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-success" href="{{ route('signup') }}">Sign Up</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
{{-- end nav --}}
