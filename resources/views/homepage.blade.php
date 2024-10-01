@extends('layout.master')

@section('title', 'Expense Tracker')

@section('content')
<div class="container mt-5">
    <!-- Main Section with Two-Column Layout -->
    <div class="row">
        <!-- Left Column: Welcome Section -->
        <div class="col-md-6 d-flex flex-column justify-content-center" style="background-color: #f0f3f5; padding: 40px; border-radius: 15px;">
            <h1 class="mb-4" style="font-size: 2.5rem; color: #2c3e50;">Take Control of Your Finances</h1>
            <p style="font-size: 1.2rem; color: #7f8c8d;">Manage your budget, track expenses, and gain financial insights to make better decisions. A smarter way to handle your money.</p>
            <a href="{{ route('expenses.create') }}" class="btn btn-lg mt-3" style="background-color: #27ae60; color: white; border-radius: 30px; padding: 10px 30px;">Start Tracking Now</a>
        </div>

        <!-- Right Column: Hero Image -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="Expense-tracker-templates.jpg" alt="Expense Tracker" style="max-width: 100%; border-radius: 15px;">
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="benefits-section mt-5 text-center">
        <h2 class="mb-4" style="color: #2c3e50;">What Sets Us Apart?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="benefit-box p-4" style="border: 2px solid #2980b9; border-radius: 15px;">
                    <h5 class="benefit-title" style="color: #2980b9;">Automated Expense Tracking</h5>
                    <p class="benefit-text">Spend less time on manual tracking and focus on making better financial decisions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="benefit-box p-4" style="border: 2px solid #27ae60; border-radius: 15px;">
                    <h5 class="benefit-title" style="color: #27ae60;">Smart Categorization</h5>
                    <p class="benefit-text">Our system intelligently categorizes your expenses for easy insights and reporting.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="benefit-box p-4" style="border: 2px solid #e67e22; border-radius: 15px;">
                    <h5 class="benefit-title" style="color: #e67e22;">Custom Reports</h5>
                    <p class="benefit-text">Generate custom reports to analyze your spending trends and optimize your budget.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action with Detailed Info -->
    <section class="cta-info-section mt-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;">
        <div class="row">
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <h2 style="color: #2c3e50;">Ready to Level Up Your Finances?</h2>
                <p style="font-size: 1.2rem; color: #7f8c8d;">Sign up now and gain access to detailed financial reports, smart expense tracking, and budget optimization tools designed to help you succeed.</p>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="{{ route('expenses.create') }}" class="btn btn-lg" style="background-color: #2980b9; color: white; border-radius: 30px; padding: 10px 40px;">Get Started Today</a>
            </div>
        </div>
    </section>
</div>
@endsection
