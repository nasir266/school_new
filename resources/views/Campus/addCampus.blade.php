
@extends('layout.main')

@section('title', 'Add-Capmus')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Capmus</h3>
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
                                        <h3>Add New Capmus</h3>
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
                                <form method="post" action="{{route('addNewCampus')}}" class="new-added-form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Campus Name*</label>
                                            <input name="cam_name" type="text" placeholder="Enter Campus Name..." class="form-control">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Phone No#</label>
                                            <input name="cam_phone" type="number" placeholder="Enter Campus Number..." class="form-control">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Location</label>
                                            <input name="location" type="text" placeholder="Enter Location..." class="form-control">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                            <label>Principal/Managar</label>
                                            <input name="principal" type="text" placeholder="Principal/Managar Name..." class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Email*</label>
                                            <input name="email" type="email" placeholder="Enter Email..." class="form-control">
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

                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

        </div>



        <script>
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

        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>

    <!-- Page Area End Here -->
@endsection
