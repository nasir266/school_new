
@extends('layout.main')

@section('title', 'Dashboad-Class')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Add Class</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
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
                                        <h3>Add New Class</h3>
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
                                <form method="post" action="{{route('addClass')}}" class="new-added-form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Class Name</label>
                                            <input name="class" type="text" placeholder="Enter Class Name..." class="form-control">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Add Fee</label>
                                            <input name="fee" type="number" placeholder="Enter Fee..." class="form-control">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Select Fee Type*</label>
                                            <select name="fee_type" class="select2">
                                                <option value="">Select Type</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="yearly">Yearly</option>
                                                <option value="installment">installment</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Select Department</label>
                                            <select id="department1" name="department" class="select2">
                                                <option value="">Select Department</option>
                                                <option value="Primary">Primary</option>
                                                <option value="Middle">Middle</option>
                                                <option value="High">High</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Higher Education">Higher Education</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div id="bachelor" class="col-xl-4 col-lg-6 col-12 form-group" style="display: none">
                                            <label>Sub Departments</label>
                                            <select id="bachelor1" name="sub_dep" class="select2">
                                                <option value="">Select sub department</option>
                                                <option value="Bachelor of Science">Bachelor of Science</option>
                                                <option value="Associate Degree Program">Associate Degree Program</option>
                                            </select>
                                        </div>
                                        <div id="semester" class="col-xl-4 col-lg-6 col-12 form-group" style="display: none">
                                            <label>Select Semester</label>
                                            <select name="semester" class="select2">
                                                <option value="">Select Semester</option>
                                                <option value="1st Semester">1st Semester</option>
                                                <option value="5th Semester">5th Semester</option>
                                            </select>
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

        <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Class List</h3>
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
                                <div class="col-6-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input id="class" type="text" placeholder="Search by Class Name ..." class="form-control">
                                </div>
                                <div class="col-6-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input id="department" type="text" placeholder="Search by Department Name ..." class="form-control">
                                </div>

                                {{--                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">--}}
                                {{--                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>--}}
                                {{--                                </div>--}}
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap" id="parentTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">#</label>
                                            </div>
                                        </th>
                                        <th>Class Name</th>
                                        <th>Class Fee</th>
                                        <th>Department</th>
                                        <th>Sub-Department</th>
                                        <th>Semester</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($class as $class)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $loop->iteration }}</label>
                                            </div>
                                        </td>
                                        <td>{{ $class->className }}</td>
                                        <td>{{ $class->fee }}</td>
                                        <td>{{ $class->department }}</td>
                                        <td>{{ $class->sub_dep ?? '-'}}</td>
                                        <td>{{ $class->semester ?? '-' }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="editClass/{{ $class->id }}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="deleteClass/{{ $class->id }}"><i
                                                            class="fas fa-times text-orange-red"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>


    <script>
        //  for search class
        document.getElementById("class").addEventListener("keyup", function () {
            let searchValue = this.value.toLowerCase();
            let rows = document.querySelectorAll("#parentTable tbody tr");

            rows.forEach(row => {
                let email = row.cells[1].textContent.toLowerCase(); // Email column

                if (email.includes(searchValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        // search by department
        document.getElementById("department").addEventListener("keyup", function () {
            let value = this.value.toLowerCase();
            let rows = document.querySelectorAll("#parentTable tbody tr");

            rows.forEach(row => {
                let name  = row.cells[3].textContent.toLowerCase(); // Name column

                if (name.includes(value)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {

            const department = document.getElementById("department1");
            const bachelor = document.getElementById("bachelor");

            // Hide initially
            bachelor.style.display = "none";

            // Listen for change (works with Select2)
            $('#department1').on('change', function () {
                if ($(this).val() === "Higher Education") {
                    $('#bachelor').show();
                } else {
                    $('#bachelor').hide();
                    $('#bachelor1').val(null).trigger('change');
                    $('#semester').hide();
                    $('#semester1').val(null).trigger('change');
                }
            });

        });

        document.addEventListener("DOMContentLoaded", function () {

            const department = document.getElementById("bachelor1");
            const bachelor = document.getElementById("semester");

            // Hide initially
            bachelor.style.display = "none";

            // Listen for change (works with Select2)
            $('#bachelor1').on('change', function () {
                if ($(this).val() === "Bachelor of Science") {
                    $('#semester').show();
                } else {
                    $('#semester').hide();
                    $('#semester1').val(null).trigger('change');
                }
            });

        });
    </script>
    <!-- Page Area End Here -->
@endsection
