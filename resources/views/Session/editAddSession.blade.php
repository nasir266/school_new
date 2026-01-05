
@extends('layout.main')

@section('title', 'Dashboad-session')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Edit Session</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Session</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Edit User</h3>
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
                                <form method="post" action="{{ url('editMySession', $record->id ) }}" class="new-added-form">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Session Year</label>
                                            <input name="session" type="text" value="{{ $record->session }}" placeholder="Session year" class="form-control">
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                                            <label>Department</label>
                                            <select name="department" class="select2">
                                                <option value="">Select Department</option>
                                                <option value="Primary" {{ $record->department == "Primary" ? 'selected' : '' }}>Primary</option>
                                                <option value="Middle" {{ $record->department == "Middle" ? 'selected' : '' }}>Middle</option>
                                                <option value="High" {{ $record->department == "High" ? 'selected' : '' }}>High</option>
                                                <option value="Intermediate" {{ $record->department == "Intermediate" ? 'selected' : '' }}>Intermediate</option>
                                                <option value="Higher Education" {{ $record->department == "Higher Education" ? 'selected' : '' }}>Higher Education</option>
                                                <option value="Other" {{ $record->department == "Other" ? 'selected' : '' }}>Other</option>
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

        
        <!-- Footer Area Start Here -->
        @include('layout.footer')

        <!-- Footer Area End Here -->
    </div>

    <!-- Page Area End Here -->
@endsection
