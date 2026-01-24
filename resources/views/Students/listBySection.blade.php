
@extends('layout.main')

@section('title', 'Dashboad-Students')

@section('main-content')

    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Select Section</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Select Section</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add subject form</h3>
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
                        <form method="POST" action="{{ route('show.students.by.section') }}" class="new-added-form">                             @csrf
                            <div class="row">


                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Select Class*</label>
                                    <select name="class_id" id="class_id" class="select2">

                                    <option value="">Select User Type</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->className }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Select Section</label>
                                    <select name="section_id" id="section_id" class="select2">

                                    <option value="">Select User Type</option>

                                    </select>
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
<script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
<script>
    $(document).ready(function () {

        $('#class_id').on('change', function () {

            let class_id = $(this).val();
            $('#section_id').html('<option value="">Select Section</option>');

            if (class_id) {
                $.ajax({
                    url: '/get-sections/' + class_id,
                    type: 'GET',
                    success: function (data) {

                        if (data.length > 0) {
                            $.each(data, function (key, section) {
                                $('#section_id').append(
                                    '<option value="' + section.id + '">' + section.section + '</option>'
                                );
                            });
                        }
                    }
                });
            }
        });

    });
</script>

