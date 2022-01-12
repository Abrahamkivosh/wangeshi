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
                                <h5 class="text-muted"><i class="fa fa-circle"
                                        style="color: #fb9678;"></i> Amount</h5>
                                <h4 class="m-b-0">8500</h4>
                            </li>
                            <li class="p-r-20">
                                <h5 class="text-muted"><i class="fa fa-circle"
                                        style="color: #01c0c8;"></i> Profits</h5>
                                <h4 class="m-b-0">3630</h4>
                            </li>
                            <li>
                                <h5 class="text-muted"> <i class="fa fa-circle"
                                        style="color: #4F5467;"></i> Expenses</h5>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">New Members List</h5>
                        <p class="text-muted">Recent members to Wangeshi chama</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td><span class="label label-danger">admin</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Deshmukh</td>
                                        <td>Gaylord</td>
                                        <td>@Ritesh</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td><span class="label label-warning">Member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td><span class="label label-success">Member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">New Product List</h5>
                        <p class="text-muted">this is the sample data here for crm</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Products</th>
                                        <th>Popularity</th>
                                        <th>Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Milk Powder</td>
                                        <td><span class="peity-line" data-width="120"
                                                data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}'
                                                data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                        <td><span class="text-danger text-semibold"><i
                                                    class="fa fa-level-down" aria-hidden="true"></i>
                                                28.76%</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Air Conditioner</td>
                                        <td><span class="peity-line" data-width="120"
                                                data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}'
                                                data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                        <td><span class="text-warning text-semibold"><i
                                                    class="fa fa-level-down" aria-hidden="true"></i>
                                                8.55%</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>RC Cars</td>
                                        <td><span class="peity-line" data-width="120"
                                                data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}'
                                                data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                        <td><span class="text-success text-semibold"><i class="fa fa-level-up"
                                                    aria-hidden="true"></i> 58.56%</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Down Coat</td>
                                        <td><span class="peity-line" data-width="120"
                                                data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}'
                                                data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                        <td><span class="text-info text-semibold"><i class="fa fa-level-up"
                                                    aria-hidden="true"></i> 35.76%</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
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