@extends('layouts.main')
@section('content')


<!-- Page wrapper  -->
<!-- ============================================================== -->
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
                <h4 class="text-themecolor">Issues</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Issue</li>
                    </ol>
                    <a href="{{route('issues.create')}}" type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i>New Issue</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Issue Table</h4>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>@foreach($issues as $key => $issue)
                                    <tr>

                                        <td>{{++$key}}</td>
                                        <td>{{$issue->user->first_name . " ".$issue->user->last_name}} </td>
                                        <td> {{ Str::of($issue->description )->limit(30) }} </td>
                                        <td>
                                            <div class="row">
                                                <div class="div">
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('issues.show', $issue) }}">View</a>

                                                </div>
                                                <div class="div pl-2">
                                                    <a class="btn btn-sm btn-info"
                                                        href="{{ route('issues.edit', $issue) }}">Edit</a>

                                                </div>
                                                <div class="pl-2 ">
                                                    <form action="{{ route('issues.destroy', $issue) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="margin-left: 3%"
                                                            onclick="return confirm('Are you sure you want to delete this Event?');"
                                                            class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>


                                    </tr> @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->


@endsection
