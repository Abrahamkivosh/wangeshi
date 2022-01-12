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
                <h4 class="text-themecolor">user</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">user</li>
                    </ol>
                    <!-- Button trigger modal -->
                  
                    
                   
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
                        <h4 class="card-title">{{$user->first_name . " ". $user->middle_name . " ". $user->last_name}}</h4>
                        <h6 class="card-subtitle">User Details</h6>

                        <ul class="list-group">
                            <li class="list-group-item ">Full Name {{$user->first_name . " ". $user->last_name}} </li>
                            <li class="list-group-item ">Type :    @if ($user->role)
                                <span class="badge badge-pill badge-info">Admin</span>
                            @else
                            <span class="badge badge-pill badge-warning">Member</span>
                            @endif</li>
                            <li class="list-group-item ">Email {{$user->email}} </li>
                            <li class="list-group-item ">Phone {{$user->phone}} </li>
                            <li class="list-group-item ">Id No. {{$user->id_number}} </li>
                            <li class="list-group-item ">Balance {{$user->balance}} </li>
                        </ul>
                        <div>
                            @if (auth()->user()->role == 1 && $user->id == auth()->user()->id  )
                            <a class="btn btn-info" href="{{route('users.edit',$user)}}">Edit User </a>
                            @endif
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
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