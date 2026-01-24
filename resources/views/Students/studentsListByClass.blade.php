@extends('layout.main')
@section('title', 'Students List By Class')

@section('main-content')
    <div class="dashboard-content-one">
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title"><h3>Students List By Class</h3></div>
                </div>

                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
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
                            @if(isset($feeArray) && count($feeArray) > 0)
                                @php
                                    $allFeeNames = collect($feeArray)
                                        ->flatMap(fn($row)=> array_keys($row))
                                        ->unique()->values();
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
                                <td>{{ $index + 1 }}</td>
                                <td class="text-center">
                                    <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                        <img src="{{ asset('storage/'.$stu->student_image) }}" style="width: 100%;height: 100%; object-fit: cover;" alt="student">
                                    </div>
                                </td>
                                <td>{{ $stu->student_name }}</td>
                                <td>{{ $stu->parent_name ?? 'N/A' }}</td>
                                <td>{{ $stu->religion ?? 'N/A' }}</td>
                                <td>{{ $stu->phone ?? 'N/A' }}</td>
                                <td>{{ $stu->phone2 ?? 'N/A' }}</td>
                                <td>{{ $stu->cnic ?? 'N/A' }}</td>
                                <td>{{ $stu->date_of_birth ?? 'N/A' }}</td>
                                <td>{{ $stu->gender ?? 'N/A' }}</td>
                                <td>{{ $stu->join_date ?? 'N/A' }}</td>
                                <td>{{ $stu->referance ?? 'N/A' }}</td>
                                <td>{{ $stu->email ?? 'N/A' }}</td>
                                <td>{{ $stu->department ?? 'N/A' }}</td>
                                <td>{{ $stu->session ?? 'N/A' }}</td>
                                <td>{{ $stu->className ?? 'N/A' }}</td>
                                <td>{{ $stu->section ?? 'N/A' }}</td>
                                <td>{{ $stu->classFee ?? '0' }}</td>
                                @if(isset($feeArray))
                                    @foreach($allFeeNames as $name)
                                        <td>{{ $feeArray[$index][$name] ?? 0 }}</td>
                                    @endforeach
                                @endif
                                <td>{{ $stu->discount ?? '0' }}</td>
                                <td>{{ $stu->t_fee ?? '0' }}</td>
                                <td>{{ $stu->fee_start_date ?? 'N/A' }}</td>
                                <td>{{ $stu->prev_class ?? 'N/A' }}</td>
                                <td>{{ $stu->passing_year ?? 'N/A' }}</td>
                                <td>{{ $stu->total_marks ?? '0' }}</td>
                                <td>{{ $stu->obtn_marks ?? '0' }}</td>
                                <td>{{ $stu->school_board ?? 'N/A' }}</td>
                                <td>{{ $stu->address ?? 'N/A' }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="flaticon-more-button-of-three-dots"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @include('layout.footer')
        </div>
@endsection
