
@extends('layout.main')

@section('title', 'Dashboad-School')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h2>School List</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Expanse Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>School List</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Phone" class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table data-table text-nowrap">
                                <thead>

                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Photos</th>
                                        <th>School Name</th>
                                        <th>Slogan</th>
                                        <th>School Email</th>
                                        <th>School Number</th>
                                        <th>School Telephone</th>
                                        <th>Owner Name</th>
                                        <th>Owner Email</th>
                                        <th>Owner Contact</th>
                                        <th>Owner Telephone</th>
                                        <th>Principal Name</th>
                                        <th>Principal Email</th>
                                        <th>Principal Contact</th>
                                        <th>Principal Telephone</th>
                                        <th>Joining Date</th>
                                        <th>Land Line</th>
                                        <th>Address</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach( $data as $list)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#00{{$loop->iteration}}</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                                <img  src="{{ asset('images/schools/'.$list->image) }}" style="width: 100%;height: 100%; object-fit: cover;" alt="school">
                                            </div>
                                        </td>
                                        <td>{{$list->name}}</td>
                                        <td>{{$list->slogn}}</td>
                                        <td>{{$list->email}}</td>
                                        <td>{{$list->scl_number}}</td>
                                        <td>{{$list->scl_tel}}</td>
                                        <td>{{$list->owner_name}}</td>
                                        <td>{{$list->owner_email}}</td>
                                        <td>{{$list->owner_number}}</td>
                                        <td>{{$list->owner_tel ?? '--'}}</td>
                                        <td>{{$list->prin_name ?? '--'}}</td>
                                        <td>{{$list->prin_email ?? '--'}}</td>
                                        <td>{{$list->prin_number ?? '--'}}</td>
                                        <td>{{$list->prin_tel ?? '--'}}</td>
                                        <td>{{$list->joinDate}}</td>
                                        <td>{{$list->land}}</td>
                                        <td>{{$list->address}}</td>
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                <!-- Expanse Table Area End Here -->

    <!-- Page Area End Here -->
@endsection
