
@extends('layout.main')

@section('title', 'Dashboad-Activation')

@section('main-content')


    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h2>School Activation</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
       <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Activation Form of School</h3>
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
                                <form action="{{ route('addActiveSchool')}}" method="post" class="new-added-form">
                                    @csrf
                                    <div class="row">
                                        
                                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                                <label>Schools</label>
                                                <select name="fk_sh_id" class="select2" >
                                                    <option value="">Select School</option>
                                                    @foreach( $school as $school)
                                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                                <label>Packages</label>
                                                <input name="package" type="text" placeholder="Enter package..." class="form-control">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                                <label>Duration </label>
                                                <select name="duration" class="select2">
                                                    <option value="">Select Duration</option>
                                                    <option value="6m">6-Months</option>
                                                    <option value="1y">1-Year</option>
                                                    <option value="3y">3-Years</option>
                                                    <option value="5y">5-Years</option>
                                                    <option value="10y">10-Years</option>
                                                    <option value="lt">Life Time</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Activate</button>
                                                <!-- <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button> -->
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
