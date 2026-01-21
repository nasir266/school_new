
@extends('layout.main')

@section('title', 'Dashboad-Teachers')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Teachers</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Teachers</li>
            </ul>
        </div>


{{--        <div class="toast-container position-fixed top-0 end-0 p-3">--}}
{{--            @if(session('success'))--}}
{{--                <div class="toast show text-bg-success border-0" role="alert">--}}
{{--                    <div class="d-flex">--}}
{{--                        <div class="toast-body">--}}
{{--                            {{ session('success') }}--}}
{{--                        </div>--}}
{{--                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Teachers</h3>
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
                                <form method="post" class="new-added-form"  action="{{ route('addTeachers') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Teacher Image</label>
                                            <input name="image" type="file" accept="image/*" class="form-control" >
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Full Name*</label>
                                            <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Phone No*</label>
                                            <input name="phone" type="text" placeholder="Enter Phone Number" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>CNIC*</label>
                                            <input name="cnic" type="text" placeholder="Enter CNIC" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>D-O-B*</label>
                                            <input name="DOB" type="date" placeholder="Enter Date of Birth" class="form-control" required>
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
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Last Degree*</label>
                                            <input name="l_degree" type="text" placeholder="Last Degree" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Joining Date*</label>
                                            <input name="j_date" type="date" placeholder="Joining Date" class="form-control" required>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Salary*</label>
                                            <input name="salary" type="text" placeholder="Enter Salary" class="form-control" required>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Subject*</label>
                                            <input name="subject" type="text" placeholder="Enter Subject" class="form-control" required>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea cols="12" rows="4" name="address" placeholder="Address" class="form-control"></textarea>
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
                                <h3>Teachers List</h3>
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
                                    <input id="searchEmail" type="text" placeholder="Search by email ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input id="searchName" type="text" placeholder="Search by Name ..." class="form-control">
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
                            <table class="table display data-table text-nowrap" id="parentTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">#</label>
                                            </div>
                                        </th>
                                        <th>Photos</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>CNIC</th>
                                        <th>Last Degree</th>
                                        <th>Specialization</th>
                                        <th>Salary</th>
                                        <th>DOB</th>
                                        <th>Joining Date</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $loop->iteration }}</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                                <img  src="{{ asset('storage/'.$teacher->image ) }}" style="width: 100%;height: 100%; object-fit: cover;" alt="teacher">
                                            </div>
                                        </td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->cnic }}</td>
                                        <td>{{ $teacher->last_degree }}</td>
                                        <td>{{ $teacher->subject }}</td>
                                        <td>{{ $teacher->salary }}</td>
                                        <td>{{ $teacher->date_of_birth }}</td>
                                        <td>{{ $teacher->join_date }}</td>
                                        <td>{{ $teacher->address }}</td>
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

    <script>
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
        //  for search email
        document.getElementById("searchEmail").addEventListener("keyup", function () {
            let searchValue = this.value.toLowerCase();
            let rows = document.querySelectorAll("#parentTable tbody tr");

            rows.forEach(row => {
                let email = row.cells[3].textContent.toLowerCase(); // Email column

                if (email.includes(searchValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        // search by name
        document.getElementById("searchName").addEventListener("keyup", function () {
            let value = this.value.toLowerCase();
            let rows = document.querySelectorAll("#parentTable tbody tr");

            rows.forEach(row => {
                let name  = row.cells[2].textContent.toLowerCase(); // Name column

                if (name.includes(value)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>

    <!-- Page Area End Here -->
@endsection
