
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

                                <form action="{{ route('addStudents') }}" method="post" class="new-added-form" enctype="multipart/form-data">
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
                                            <label>Student Image</label>
                                            <input name="image" type="file" class="form-control" accept="image/*"  >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Full Name*</label>
                                            <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Parents*</label>
                                            <select id="parentsDropdown" name="parent" class="select2" required>
                                                <option value="">Select Parents</option>
                                                @foreach($parents as $parents)
                                                    <option value="{{$parents->p_id}}">{{ $parents->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Religion*</label>
                                            <select name="religion" class="select2" required>
                                                <option value="">Religion</option>
                                                <option value="muslim">Muslim</option>
                                                <option value="non-muslim">Non-Muslim</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Mobile Number*</label>
                                            <input name="phone" type="text" placeholder="Mobile Number" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Mobile Number 2</label>
                                            <input name="phone2" type="text" placeholder="Mobile Number" class="form-control" >
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>CNIC/B-Form*</label>
                                            <input name="cnic" type="text" placeholder="Enter CNIC" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>D-O-B*</label>
                                            <input name="DOB" type="date" class="form-control" required>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Gender*</label>
                                            <select name="gender" class="select2" required>
                                                <option value="">Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <label>Joining Date*</label>
                                            <input name="j_date" value="{{ date('Y-m-d') }}" type="date" placeholder="Joining Date" class="form-control" readonly required>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Referance</label>
                                            <input name="referance" type="text" placeholder="Enter Referance" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>E-mail</label>
                                            <input name="email" id="email" type="email" placeholder="Enter Email" class="form-control" readonly>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Password</label>
                                            <input name="password" id="password" type="password" placeholder="Enter password..." class="form-control">
                                            <i class="fa fa-eye toggle-eye" onclick="togglePassword('password', this)"></i>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Confirm Password</label>
                                            <input name="password_confirmation" id="confirm_password" type="password" placeholder="Confirm password..." class="form-control">
                                            <i class="fa fa-eye toggle-eye" onclick="togglePassword('confirm_password', this)"></i>
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
                                            <label>Department</label>
                                            <select id="department_id" name="department" class="select2">
                                                <option value="">Select Department</option>
                                                <option value="Primary">Primary</option>
                                                <option value="Middle">Middle</option>
                                                <option value="High">High</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Higher Education">Higher Education</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Session*</label>
                                            <select id="session_id" name="session" class="select2" required>
                                                <option value="">Select Session</option>

                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Class*</label>
                                            <select id="class_id" name="class" class="select2" required>
                                                <option value="">Select Class</option>

                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Select Section*</label>
                                            <select id="section_id" name="section" class="select2" required>
                                                <option value="">Select Section</option>

                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Class Fee*</label>
                                            <input id="class_fee" name="class_fee" type="text" placeholder="Class Fee" class="form-control" readonly>
                                        </div>
                                        @foreach($feeType as $feeType)
                                            @if($feeType->stu_enrol == 1)
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>{{ $feeType->fee_type }}*</label>
                                                    <input name="feeType[]" type="number" placeholder="Enter {{$feeType->fee_type}} Fee" class="feeType form-control" required>
                                                    <input name="feeTypeId[]" type="hidden" value="{{ $feeType->id }}">
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Discount</label>
                                            <input id="discount" name="cls_fee_dsc" value="0" type="number" placeholder="Discount" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Total Fee</label>
                                            <input id="total_fee" name="t_fee" value="0" type="number" placeholder="Total Fee" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Fee Start Date*</label>
                                            <input name="fee_start_date" type="date" class="form-control" required>
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
                                            <input name="prev_class" type="text" placeholder="Previous Class Name" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Passing Year</label>
                                            <input name="pass_year" type="text" placeholder="Passing Year" class="form-control" >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Total Marks</label>
                                            <input name="t_mark" type="number" placeholder="Total Marks" class="form-control" >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Obtained Marks</label>
                                            <input name="o_mark" type="number" placeholder="Obtained Marks" class="form-control" >
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
                                        <th>Photos</th>
                                        <th>Students Name</th>
                                        <th>Parents Name</th>
                                        <th>Religion</th>
                                        <th>Mobile No</th>
                                        <th>Mobile No 2</th>
                                        <th>CNIC</th>
                                        <th>D-O-B</th>
                                        <th>Gender</th>
                                        <th>Joining Date</th>
                                        <th>Referance</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Session</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Class Fee</th>
                                        @if(isset($fees) && count($fees) > 0)
                                            @php
                                                $allFeeNames = collect($fees)
                                                    ->flatMap(function($row){ return array_keys($row); })
                                                    ->unique()
                                                    ->values();
                                            @endphp
                                            @foreach($allFeeNames as $name)
                                                <th>{{ $name }}</th>
                                            @endforeach
                                        @endif
                                        <th>Discount</th>
                                        <th>Total Fee</th>
                                        <th>Fee Start Date</th>
                                        <th>Previous Class Name</th>
                                        <th>Passing Year</th>
                                        <th>Total Marks</th>
                                        <th>Obtain Marks</th>
                                        <th>School/College Board</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $index => $stu)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $loop->iteration }}</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                                <img  src="{{ asset('/storage/'.$stu->image) }}" style="width: 100%;height: 100%; object-fit: cover;" alt="parent">
                                            </div>
                                        </td>
                                        <td>{{ $stu->name }}</td>
                                        <td>{{ $stu->parent_name }}</td>
                                        <td>{{ $stu->religion }}</td>
                                        <td>{{ $stu->phone }}</td>
                                        <td>{{ $stu->phone2 }}</td>
                                        <td>{{ $stu->cnic }}</td>
                                        <td>{{ $stu->date_of_birth }}</td>
                                        <td>{{ $stu->gender }}</td>
                                        <td>{{ $stu->join_date }}</td>
                                        <td>{{ $stu->referance }}</td>
                                        <td>{{ $stu->email }}</td>
                                        <td>{{ $stu->department }}</td>
                                        <td>{{ $stu->session }}</td>
                                        <td>{{ $stu->className }}</td>
                                        <td>{{ $stu->section }}</td>
                                        <td>{{ $stu->classFee }}</td>
                                        @if(isset($fees))
                                            @foreach($allFeeNames as $name)
                                                <td>{{ $fees[$index][$name] ?? 0 }}</td>
                                            @endforeach
                                        @endif
                                        <td>{{ $stu->discount }}</td>
                                        <td>{{ $stu->t_fee }}</td>
                                        <td>{{ $stu->fee_start_date }}</td>
                                        <td>{{ $stu->prev_class }}</td>
                                        <td>{{ $stu->passing_year }}</td>
                                        <td>{{ $stu->total_marks }}</td>
                                        <td>{{ $stu->obtn_marks }}</td>
                                        <td>{{ $stu->school_board }}</td>
                                        <td>{{ $stu->address }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // FOR CLASS TO FEE
            $('#class_id').on('change', function () {

                var classId = $(this).val();

                if (classId) {
                    $.ajax({
                        url: "/get-class-fee/" + classId,
                        type: "GET",
                        success: function (data) {
                            $('#class_fee').val(data.fee);
                        }
                    });
                } else {
                    $('#class_fee').val('');
                }
            });
            // FOR DEPARTMENT TO SESSION

                $('#department_id').on('change', function() {

                var deptId = $(this).val();

                if(deptId) {

                $.ajax({
                url: "/get-sessions/" + deptId,
                type: "GET",
                success: function(data) {

                $('#session_id').empty();
                $('#session_id').append('<option value="">Select Session</option>');

                var firstSessionId = null;

                $.each(data, function(index, session) {

                if(index === 0) {
                firstSessionId = session.id;   // latest session (first row)
            }

                $('#session_id').append(
                '<option value="'+ session.id +'">'+ session.session +'</option>'
                );
            });

                // Select the latest session by default
                if(firstSessionId) {
                $('#session_id').val(firstSessionId).change();
            }
            }
            });

            } else {
                $('#session_id').empty();
                $('#session_id').append('<option value="">Select Session</option>');
            }

            });
    // FOR DEPARTMENT TO CLASSES

        $('#department_id').on('change', function() {

            var deptId = $(this).val();

            if(deptId) {

                // Load classes based on department
                $.ajax({
                    url: "/get-classes/" + deptId,
                    type: "GET",
                    success: function(data) {

                        $('#class_id').empty();
                        $('#class_id').append('<option value="">Select Class</option>');

                        $.each(data, function(key, cls) {
                            $('#class_id').append(
                                '<option value="'+ cls.id +'">'+ cls.className +'</option>'
                            );
                        });
                    }
                });

            } else {

                $('#class_id').empty();
                $('#class_id').append('<option value="">Select Class</option>');
            }

        });
    //FOR CLASSES TO SECTIONS

                $('#class_id').on('change', function () {

                var classId = $(this).val();

                if(classId) {

                $.ajax({
                url: "/get-sections/" + classId,
                type: "GET",
                success: function(data) {

                $('#section_id').empty();
                $('#section_id').append('<option value="">Select Section</option>');

                $.each(data, function(key, sec) {
                $('#section_id').append(
                '<option value="'+ sec.id +'">'+ sec.section +'</option>'
                );
            });
            }
            });

            } else {
                $('#section_id').empty();
                $('#section_id').append('<option value="">Select Section</option>');
            }
            });
    // CALCULATE TOTAL FEE
        function calculateTotal() {

                // Get class fee (first field)
                var classFee = parseFloat($('#class_fee').val()) || 0;

                // Sum all infinity feeType[] fields
                var feeSum = 0;
                $('input[name="feeType[]"]').each(function() {
                    feeSum += parseFloat($(this).val()) || 0;
                });

                // Get discount
                var discount = parseFloat($('#discount').val()) || 0;

                // Calculate final total
                var total = classFee + feeSum - discount;

                // Show result
                $('#total_fee').val(total);
            }

            // Trigger calculation on change/input of any field
            $(document).on('input', '#class_fee, input[name="feeType[]"], #discount', function() {
                calculateTotal();
            });





    });



    // for generate email
        document.getElementById('name').addEventListener('input', function () {
            let result = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
            this.value = result;
            let userText = result
                .toLowerCase()
                .replace(/\s+/g, '');
            let extraText = '@gmail.com';

            document.getElementById('email').value = userText
                ? userText + extraText
                : '';
        });


        document.addEventListener("DOMContentLoaded", function () {
            const password = generatePassword();
            document.getElementById("password").value = password;
            document.getElementById("confirm_password").value = password;
        });

        function generatePassword() {
            const length = 12;
            const chars =
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@";

            let password = "";
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * chars.length);
                password += chars[randomIndex];
            }
            return password;
        }

        //     toggle input password fields
        function togglePassword(fieldId, icon) {
            const field = document.getElementById(fieldId);

            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                field.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    // //     get parents name
    //     $('#parentsDropdown').on('change', function () {
    //         let text = $('#parentsDropdown option:selected').text();
    //         $('#parent').val(text);   // save TEXT in hidden field
    //     });
    </script>

    <!-- Page Area End Here -->
@endsection
