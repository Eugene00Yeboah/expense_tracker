@extends('layout.master')

@section('title', 'Sign Up')

@section('content')
<div class="container-fluid bg-light vh-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-5">
            <div class="p-5 bg-white rounded shadow-lg">
                <h3 class="text-center mb-4">Create Your Account</h3>
                <form method="POST" action="{{ route('signup') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">FirstName</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="firstname" value="{{ old('name') }}" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">LastName</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="lastname" value="{{ old('name') }}" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="{{ route('login') }}">Already have an account? Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
