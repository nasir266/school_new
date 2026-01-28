
@extends('layout.main')

@section('title', 'Dashboad-School')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h2>Add School</h2>
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
                                <form action="{{ route('school_data') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                                    @csrf
                                    <!-- School Information -->
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>School Information</h3>
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
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>School Name *</label>
                                            <input name="name" id="sName" type="text" placeholder="School Name" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Slogan *</label>
                                            <input name="slogan" type="text" placeholder="Enter Slogan" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Image</label>
                                            <input name="image" type="file" placeholder="Enter Logo" accept="image/*" class="form-control">
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                                            <label>Address</label>
                                            <input name="address" type="text" placeholder="Enter Address" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Contact Number</label>
                                            <input name="scl_number" type="text" placeholder="Enter Contact Number" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Telephone Number</label>
                                            <input name="scl_tel" type="text" placeholder="Enter Telephone Number" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Land Line</label>
                                            <input name="landLine" type="text" placeholder="Enter Land Line" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Joining Date *</label>
                                            <input name="joinDate" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                                data-position='bottom right'>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" id="sEmail" class="form-control" readonly>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Password</label>
                                            <input name="password" id="password" type="password" placeholder="Enter password..." class="form-control">
                                            <i class="fa fa-eye toggle-eye" onclick="togglePassword('password', this)"></i>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Confirm Password</label>
                                            <input name="password_confirmation" id="confirm_password" type="password" placeholder="Confirm password..." class="form-control">
                                            <i class="fa fa-eye toggle-eye" onclick="togglePassword('confirm_password', this)"></i>
                                        </div>
                                    </div>
                                    <!-- Owner Information  -->
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Owner Information</h3>
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

                                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                                            <label>Owner Name</label>
                                            <input name="owner_name" type="text" placeholder="Enter Owner Name" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Email</label>
                                            <input name="owner_email" type="email" placeholder="Enter email" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Contact Number</label>
                                            <input name="owner_number" type="text" placeholder="Enter Contact Number" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Telephone Number</label>
                                            <input name="owner_tel" type="text" placeholder="Enter Telephone Number" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-2" type="checkbox" name="check" id="principalInfo">
                                                <label class="form-check-label mb-0" for="principalInfo">
                                                    Principal Info
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Principal information -->
                                    <div id="pInfo" class="d-none">
                                        <div class="heading-layout1">
                                                    <div class="item-title">
                                                        <h3>Principle Information</h3>
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

                                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                                <label>Principal Name</label>
                                                <input name="prin_name" type="text" placeholder="Enter Owner Name" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                                <label>Email</label>
                                                <input name="prin_email" type="email" placeholder="Enter email" class="form-control">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Contact Number</label>
                                                <input name="prin_number" type="text" placeholder="Enter Contact Number" class="form-control">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Telephone Number</label>
                                                <input name="prin_tel" type="text" placeholder="Enter Telephone Number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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
        // check for personal information
        document.getElementById('principalInfo').addEventListener('change', function () {
            let pInfo = document.getElementById('pInfo');

            if (this.checked) {
                pInfo.classList.remove('d-none');
            } else {
                pInfo.classList.add('d-none');
            }
        });

        // for generate email
        document.getElementById('sName').addEventListener('input', function () {
            let result = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
            this.value = result;
            let userText = result
                .toLowerCase()
                .replace(/\s+/g, '');
            let extraText = '@gmail.com';

            document.getElementById('sEmail').value = userText
                ? userText + extraText
                : '';
        });

        // generate password auto
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
    </script>

    <!-- Page Area End Here -->
@endsection
