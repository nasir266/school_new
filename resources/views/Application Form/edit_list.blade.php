@extends('layout.main')

@section('title', 'Dashboad-Reception')

@section('main-content')

    <div class="dashboard-content-one">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin:0; padding:0;">
            <h3>Reception</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Edit Application</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Application Form</h3>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('ApplicationForm.update', $application->id) }}" class="new-added-form">
                            @csrf

                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-6 form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" value="{{ $application->name }}" class="form-control">
                                </div>

                                <div class="col-xl-6 col-lg-6 col-6 form-group">
                                    <label>Contact</label>
                                    <input name="contact" type="text" value="{{ $application->contact }}" class="form-control">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" value="{{ $application->address }}" class="form-control">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Reference</label>
                                    <input name="reference" type="text" value="{{ $application->reference }}" class="form-control">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Purpose</label>
                                    <input name="purpose" type="text" value="{{ $application->purpose }}" class="form-control">
                                </div>

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                        Update
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('layout.footer')

    </div>

@endsection
