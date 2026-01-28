
@extends('layout.main')

@section('title', 'Dashboad-StudentsFee')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>StudentsFee</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>StudentsFee</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add Students Fee</h3>
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
                                <form method="post" class="new-added-form" action="{{ route('addStudentsFee') }}">
                                    @csrf
                                    <div class="row">


                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Select Student</label>
                                            <select name="student_id" class="select2">
                                                <option value="">Select Student</option>
                                                @foreach($students as $stu)
                                                <option value="{{ $stu->id }}">{{$stu->student_name}} , {{$stu->parent_name}} , {{ $stu->student_email}} , {{$stu->className}} , {{$stu->sub_dep ?? ''}} , {{$stu->semester ?? ''}} , {{$stu->phone}} , {{$stu->phone2}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group ">
                                            <label>Add Fee</label>
                                            <input name="fee" type="text" placeholder="Enter Student Fee" class="form-control" required>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group ">
                                            <label>Receipt Number</label>
                                            <input name="receiptNo" type="text" placeholder="Enter Receipt Number" class="form-control" required>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Pay Date</label>
                                            <input name="pDate" type="date" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
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


    <!-- Page Area End Here -->
@endsection
