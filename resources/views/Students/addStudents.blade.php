
@extends('layout.main')

@section('title', 'Dashboad-Students')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Add Students</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Students</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Personal information -->
                                
                                <form method="post" class="new-added-form">
                                    @csrf
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Personal Information</h3>
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
                                    <div class="row">
                                        
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Student Image*</label>
                                            <input name="image" type="file" class="form-control" required >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Full Name*</label>
                                            <input name="name" type="text" placeholder="Enter Name" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Select Parents*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Parents</option>
                                                <option value="14">Parents 1</option>
                                                <option value="15">Parents 3</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Phone*</label>
                                            <input name="phone" type="text" placeholder="Phone Number" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Phone No 2*</label>
                                            <input name="phone" type="text" placeholder="Phone Number" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>CNIC/B-Form*</label>
                                            <input name="cnic" type="text" placeholder="Enter CNIC" class="form-control" required> 
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>D-O-B*</label>
                                            <input name="DOB" type="date" placeholder="Enter Date of Birth" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Religion*</label>
                                            <select name="department" class="select2">
                                                <option value="">Religion</option>
                                                <option value="14">Muslim</option>
                                                <option value="15">Non-Muslim</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Gender*</label>
                                            <select name="department" class="select2">
                                                <option value="">Gender</option>
                                                <option value="14">Male</option>
                                                <option value="15">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Joining Date*</label>
                                            <input name="j_date" type="date" placeholder="Joining Date" class="form-control" required>
                                        </div>
                                        
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Referance*</label>
                                            <input name="referance" type="text" placeholder="Enter Referance" class="form-control" required>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea cols="12" rows="4" name="address" placeholder="Address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <!-- Student Fee Information -->
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Student Fee Information</h3>
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
                                    <div class="row">
                                        
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Class*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Class</option>
                                                <option value="14">class 09</option>
                                                <option value="15">class 08</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Session*</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Session</option>
                                                <option value="14">2023</option>
                                                <option value="15">2023</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Class Fee*</label>
                                            <input name="cls_fee" type="text" placeholder="Class Fee" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Class Fee Discount</label>
                                            <input name="cls_fee-dsc" type="text" placeholder="Discount" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Addmission Fee</label>
                                            <input name="ad_fee" type="number" placeholder="Addmission Fee" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Security Fee</label>
                                            <input name="sct_fee" type="number" placeholder="Security Fee" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Prospective Fee</label>
                                            <input name="pspt_fee" type="number" placeholder="Prospective Fee" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Fee Start Date*</label>
                                            <input name="fs_date" type="date" class="form-control" required>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="button" class="btn btn-sm btn-fill-lg btn-gradient-yellow btn-hover-bluedark " style="font-size: 16px;">Subject List</button>
                                        </div> 
                                    </div>
                                    <!-- Academic Information -->
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Academic Information</h3>
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
                                    <div class="row">
                                        
                                        
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Previous Class Name*</label>
                                            <input name="p_cls_name" type="text" placeholder="Previous Class Name" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Passing Year</label>
                                            <input name="pass_year" type="text" placeholder="Passing Year" class="form-control" >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Total Marks</label>
                                            <input name="t_mark" type="text" placeholder="Total Marks" class="form-control" >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Obtained Marks</label>
                                            <input name="o_mark" type="text" placeholder="Obtained Marks" class="form-control" >
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>School /collage board</label>
                                            <input name="board" type="text" placeholder="School /collage board" class="form-control" >
                                        </div>
                                        
                                    </div>

                                        <div class="col-12 form-group mg-t-8 pt-80">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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
                                <h3>Students List</h3>
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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Father Name</th>
                                        <th>Phone</th>
                                        <th>CNIC</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Discount</th>
                                        <th>DOB</th>
                                        <th>Joining Date</th>
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
                                        <td>2222</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
                                        <td>3333</td>
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
