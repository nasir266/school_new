
@extends('layout.main')

@section('title', 'Dashboad-Attendance')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Attendance</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Attendance</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Attendance List By Section</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>
        
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" class="new-added-form">
                                    @csrf
                                    <div class="row">
                                        
                                        
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Select Class*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Class</option>
                                                <option value="14">class 09</option>
                                                <option value="15">class 08</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Select Session*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Session</option>
                                                <option value="14">2023</option>
                                                <option value="15">2023</option>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Select Month</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
        </div>

        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>
    

    <!-- Page Area End Here -->
@endsection
