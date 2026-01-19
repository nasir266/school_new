@extends('layout.main')

@section('title', 'Dashboad-Reception')

@section('main-content')

    <div class="dashboard-content-one">

        <!-- Breadcrumbs Area -->
        <div class="breadcrumbs-area d-flex justify-content-between" style="margin: 0 !important; padding: 0 !important;">
            <h3>Reception</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Reception</li>
            </ul>
        </div>
        <!-- Breadcrumbs End -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Application Form List</h3>
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

                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Reference</th>
                                    <th>Purpose</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tbody>

                                @forelse($applications as $key => $app)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $app->name }}</td>
                                        <td>{{ $app->contact }}</td>
                                        <td>{{ $app->address }}</td>
                                        <td>{{ $app->reference }}</td>
                                        <td>{{ $app->purpose }}</td>

                                        <td>
                                            @if($app->created_at->toDateString() === \Carbon\Carbon::today()->toDateString())
                                                <a class="dropdown-item" href="{{ route('ApplicationForm.edit', $app->id) }}">
                                                    <i class="fas fa-cogs text-dark-pastel-green"></i> Edit
                                                </a>

                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Records Found</td>
                                    </tr>
                                @endforelse

                                </tbody>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('layout.footer')

    </div>

@endsection
