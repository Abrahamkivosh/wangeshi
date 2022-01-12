@extends('layouts.main')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="ti-wallet"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">3</h3>
                                    <h5 class="text-muted m-b-0">New Members</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-info"><i class="ti-user"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">3</h3>
                                    <h5 class="text-muted m-b-0">New Chamas</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-danger"><i class="ti-calendar"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">16%</h3>
                                    <h5 class="text-muted m-b-0">Today's Profit</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="ti-settings"></i>
                                </div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">5</h3>
                                    <h5 class="text-muted m-b-0">New Events</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Over Visitor, Our income , slaes different and  sales prediction -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Company Analysis</h5>
                            <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                            <ul class="list-inline m-t-30 text-center">
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Amount
                                    </h5>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i>
                                        Profits</h5>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i>
                                        Expenses</h5>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total revenue Analysis</h5>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Chamas</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>Members</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Total Leads -->
            <!-- ============================================================== -->
            <!-- .row -->

            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- End Total Leads -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- New Customers List and New Products List -->
            <!-- ============================================================== -->
            <!-- /row -->
            {{-- <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">New Members List</h5>
                            <p class="text-muted">Recent members to Wangeshi chama</p>
                            <div class="table-responsive">

                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list"
                                        data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>ID #</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Type</th>
                                                <th>Balance</th>
                                                <th>Member Sense</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($users as $key => $user)

                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        <a href="javascript:void(0)"><img
                                                                src="{{ $user->profile_photo_url }}" alt="user"
                                                                class="img-circle" />
                                                            {{ $user->first_name . ' ' . $user->last_name }}</a>
                                                    </td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        @if ($user->role)
                                                            <span class="badge badge-pill badge-info">Admin</span>
                                                        @else
                                                            <span class="badge badge-pill badge-warning">Member</span>
                                                        @endif
                                                    </td>
                                                    <td> {{ $user->balance }} </td>
                                                    <td> {{ $user->created_at->format('d-M-Y') }} </td>


                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="{{ route('users.show', $user) }}">View</a>


                                                    </td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text text-danger">
                                                        No members yet
                                                    </td>
                                                </tr>

                                            @endforelse


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID #</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Type</th>
                                                <th>Balance</th>
                                                <th>Member Sense</th>
                                                <th>Action</th>
                                            </tr>

                                        </tfoot>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div> --}}
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

@endsection
