
@extends('layout.main')

@section('title', 'Dashboad-Reports')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Reports</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Reports</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
       <div class="row align-items-center mb-3">
            <div class="col-md-6">
                <img src="school-logo.png" alt="School Logo" height="50">
            </div>
            <div class="col-md-6 text-end">
                <h5 class="mb-0 fw-bold">Yeo Duran</h5>
                <small class="text-muted d-block">Software & App Developer</small>
                <small class="text-muted">Address & Contact</small>
            </div>
        </div>

        <hr class="border-primary">
        
        <!-- Title -->
    <h5 class="fw-bold mb-3">Daily Activity Report</h5>

    <!-- Summary Cards -->
    <div class="row g-2 mb-4">
        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary ">
                <div class="card-body p-2">
                    <small>Total Admissions</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary text-white">
                <div class="card-body p-2">
                    <small>Collected Fees</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary text-white">
                <div class="card-body p-2">
                    <small>Collected Fees</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary text-white">
                <div class="card-body p-2">
                    <small>Student Fine</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary text-white">
                <div class="card-body p-2">
                    <small>Staff Pay</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-6">
            <div class="card text-center bg-primary text-white">
                <div class="card-body p-2">
                    <small>Total Expenses</small>
                    <h6 class="mb-0">0</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Template -->
    <div class="mb-4">
        <h6 class="fw-bold">Admissions</h6>
        <table class="table table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Course</th>
                    <th>Fee Paid</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="4" class="text-center">No Record Found</td></tr>
            </tbody>
        </table>
    </div>

    <div class="mb-4">
        <h6 class="fw-bold">Collected Fees</h6>
        <table class="table table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Student Name</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="3" class="text-center">No Record Found</td></tr>
            </tbody>
        </table>
    </div>

    <div class="mb-4">
        <h6 class="fw-bold">Collect Student Fine</h6>
        <table class="table table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Student Name</th>
                    <th>Fine Category</th>
                    <th>Paid Amount</th>
                    <th>Paid Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="4" class="text-center">No Record Found</td></tr>
            </tbody>
        </table>
    </div>

    <div class="mb-4">
        <h6 class="fw-bold">Staff Pay</h6>
        <table class="table table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Staff Name</th>
                    <th>Type</th>
                    <th>Pay Amount</th>
                    <th>Fine Type</th>
                    <th>Fine Amount</th>
                    <th>Total Pay</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="6" class="text-center">No Record Found</td></tr>
            </tbody>
        </table>
    </div>

    <div class="mb-4">
        <h6 class="fw-bold">Expense</h6>
        <table class="table table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="3" class="text-center">No Record Found</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Totals -->
    <div class="mb-3">
        <h6 class="fw-bold">Total Inch Calculation</h6>
        <p class="mb-1">Total Admissions: 0</p>
        <p class="mb-1">Total Student Fine: 0</p>
        <p class="mb-1">Total Staff Pay: 0</p>
        <p class="mb-1">Total Expenses: 0</p>
        <p class="fw-bold">Final Inch Calculation: 0</p>
    </div>

    <!-- PDF Button -->
    <button class="btn btn-sm btn-primary">
        Download as PDF
    </button>
        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>
    

    <!-- Page Area End Here -->
@endsection
