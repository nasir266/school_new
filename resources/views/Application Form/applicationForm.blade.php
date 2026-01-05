
@extends('layout.main')

@section('title', 'Dashboad-Reception')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Reception</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Reception</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Application Form</h3>
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
                                <form method="post" action="{{ route('addsession') }}" class="new-added-form">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Name</label>
                                            <input name="name" type="text" placeholder="Enter Your Name" class="form-control">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Contact</label>
                                            <input name="contact" type="text" placeholder="Enter Your Contact" class="form-control">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Address</label>
                                            <input name="address" type="text" placeholder="Enter Your Address" class="form-control">
                                        </div>
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
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
