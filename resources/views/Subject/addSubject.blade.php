
@extends('layout.main')

@section('title', 'Dashboad-Subject')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Subjects Info</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Subject</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Subject</h3>
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
                                <form method="post" class="new-added-form" action="{{ route('addSubject') }}">
                                    @csrf
                                    <div class="row">


                                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                                            <label>Department*</label>
                                            <select id="department_id" name="department" class="select2" required>
                                                <option value="">Select Department</option>
                                                <option value="Primary">Primary</option>
                                                <option value="Middle">Middle</option>
                                                <option value="High">High</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Higher Education">Higher Education</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div id="bachelor" class="col-xl-6 col-lg-6 col-12 form-group" style="display: none">
                                            <label>Sub Departments</label>
                                            <select id="bachelor1" name="sub_dep" class="select2" >
                                                <option value="">Select sub department</option>
                                                <option value="Bachelor of Science">Bachelor of Science</option>
                                                <option value="Associate Degree Program">Associate Degree Program</option>
                                            </select>
                                        </div>
                                        <div id="semester" class="col-xl-6 col-lg-6 col-12 form-group" style="display: none">
                                            <label>Select Semester</label>
                                            <select id="semester1" name="semester" class="select2" >
                                                <option value="">Select Semester</option>
                                                <option value="1st Semester">1st Semester</option>
                                                <option value="5th Semester">5th Semester</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                                            <label>Select Session*</label>
                                            <select id="session_id" name="session1" class="select2" required>
                                                <option value="">Select Session</option>

                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                                            <label>Select Class*</label>
                                            <select id="class_id" name="class" class="select2" required>
                                                <option value="">Select Class</option>

                                            </select>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <div class="row">
                                                <div class="col-12 form-group mg-t-8 d-flex justify-content-end">
                                                    <button id="addField" type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add Subject</button>
                                                </div>
                                            </div>
                                        </div>

                                            <div id="fieldWrapper" class="col-xl-4 col-lg-6 col-12 form-group" style="margin-bottom: 10px">
                                                <label>Subject Name</label>
                                                <input name="subjects[]" type="text" placeholder="Enter Subjects" class="form-control" required>
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

    <script>

        $(document).ready(function () {

            // FOR DEPARTMENT TO SESSION

            $('#department_id').on('change', function () {

                var deptId = $(this).val();

                if (deptId) {

                    $.ajax({
                        url: "/get-sessions/" + deptId,
                        type: "GET",
                        success: function (data) {

                            $('#session_id').empty();
                            $('#session_id').append('<option value="">Select Session</option>');

                            var firstSessionId = null;

                            $.each(data, function (index, session) {

                                if (index === 0) {
                                    firstSessionId = session.id;   // latest session (first row)
                                }

                                $('#session_id').append(
                                    '<option value="' + session.id + '">' + session.session + '</option>'
                                );

                            });

                            // Select the latest session by default
                            if (firstSessionId) {
                                $('#session_id').val(firstSessionId).change();
                            }

                        }
                    });

                } else {

                    $('#session_id').empty();
                    $('#session_id').append('<option value="">Select Session</option>');

                }

            });

            // Department to classes
            $('#department_id, #bachelor1, #semester1').on('change', function () {

                var deptId  = $('#department_id').val();
                var sub_dep = $('#bachelor1').val();
                var semester = $('#semester1').val();

                if (deptId != 'Higher Education') {

                    $.ajax({
                        url: "/get-classes",
                        type: "GET",
                        data: {
                            department: deptId,
                            sub_dep: sub_dep,
                            semester: semester
                        },
                        success: function (data) {

                            $('#class_id').empty();
                            $('#class_id').append('<option value="">Select Class</option>');

                            $.each(data, function (key, cls) {
                                $('#class_id').append(
                                    '<option value="' + cls.id + '">' + cls.className + '</option>'
                                );
                            });

                        }
                    });

                } else if((deptId && sub_dep) || semester) {

                    $.ajax({
                        url: "/get-class",
                        type: "GET",
                        data: {
                            department: deptId,
                            sub_dep: sub_dep,
                            semester: semester
                        },
                        success: function (data) {

                            $('#class_id').empty();
                            $('#class_id').append('<option value="">Select Class</option>');

                            $.each(data, function (key, cls) {
                                $('#class_id').append(
                                    '<option value="' + cls.id + '">' + cls.className + '</option>'
                                );
                            });

                        }
                    });
                    $('#class_id').empty();
                    $('#class_id').append('<option value="">Select Class</option>');

                }

            });

            //     Add subjects feilds
                $('#addField').click(function () {

                    $('#fieldWrapper').append(`
                <div class="form-group mt-2 mb-2 d-flex">
                    <input type="text" name="subjects[]" class="form-control" placeholder="Enter Subject">
                    <button type="button" class="btn btn-danger removeField ms-2">X</button>
                </div>
            `);

                });

                // Remove field
                $(document).on('click', '.removeField', function () {
                    $(this).closest('.form-group').remove();
                });

        });
        // show sub-departments against departments
        document.addEventListener("DOMContentLoaded", function () {

            const department = document.getElementById("department_id");
            const bachelor = document.getElementById("bachelor");

            // Hide initially
            bachelor.style.display = "none";

            // Listen for change (works with Select2)
            $('#department_id').on('change', function () {
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
        // show semesters against sub departments
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
