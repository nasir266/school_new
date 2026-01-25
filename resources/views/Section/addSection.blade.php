
@extends('layout.main')

@section('title', 'Dashboad-Section')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Add Section</h3>
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
                                        <h3>Add New Section</h3>
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
                                <form method="post" action="{{ route('addSection')}}" class="new-added-form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Section Name</label>
                                            <input name="section" type="text" placeholder="Enter Section Name..." class="form-control">
                                        </div>


                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Select Class</label>
                                            <select name="fk_class_id" class="select2">
                                                <option value="">Select Class</option>
                                                @foreach($class as $class)
                                                <option value="{{ $class->id }}">{{ $class->className}}</option>
                                                @endforeach
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
                                <h3>All Section</h3>
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
                                <div class="col-6-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input id="section" type="text" placeholder="Search by Section Name ..." class="form-control">
                                </div>
                                <div class="col-6-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input id="class" type="text" placeholder="Search by Class Name ..." class="form-control">
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
                                        <th>Section Name</th>
                                        <th>Class Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $section as $section )
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $loop->iteration}}</label>
                                            </div>
                                        </td>
                                        <td>{{ $section->section}}</td>
                                        <td>{{ $section->className}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="deleteSection/{{ $section->id}}"><i
                                                            class="fas fa-times text-orange-red"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        @endforeach
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



    <script>
        //  for search section
        document.getElementById("section").addEventListener("keyup", function () {
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
        // search by name
        document.getElementById("class").addEventListener("keyup", function () {
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
