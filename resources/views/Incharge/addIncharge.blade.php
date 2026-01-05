
@extends('layout.main')

@section('title', 'Dashboad-Incharge')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Class Incharge</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Incharge</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add Incharge</h3>
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
                                            <label>Select Teacher*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select User Type</option>
                                                <option value="14">Teacher 1</option>
                                                <option value="15">Teacher 3</option>
                                            </select>
                                        </div>
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

        <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Incharge List</h3>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                          
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">#</label>
                                            </div>
                                        </th>
                                        <th>Teacher Name</th>
                                        <th>Class</th>
                                        <th>Session</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        <td>Teacher 1</td>   
                                        <td>class 09</td>   
                                        <td>2024</td>   
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>
    

    <!-- Page Area End Here -->
@endsection
