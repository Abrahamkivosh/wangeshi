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
                        <h5 class="card-title">User Information</h5>
                       
                        <form method="POST" action="{{ route('users.update',$user) }}" class="form-material form-horizontal m-t-8 row" enctype="multipart/form-data" >
                            @csrf
                            @method("put")

                            <div class="form-group col-md-6 ">
                              <label for="">Profile Photo</label>
                              <input type="file" class="form-control-file" name="photo" id="photo" placeholder="photo" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted">Upload Image only</small>
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="firstname">First Name</label>
                                <input id="firstname" class="form-control" type="text" name="first_name" value=" {{$user->first_name}} " >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="middle_name">Middle Name</label>
                                <input id="middle_name" class="form-control" type="text" name="middle_name" value=" {{ $user->middle_name}} " >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="last_name">Last name</label>
                                <input id="last_name" class="form-control" type="text" name="last_name" value=" {{ $user->last_name}} " >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="id_number">ID Number</label>
                                <input id="id_number" class="form-control" type="text" name="id_number" value=" {{ $user->id_number}} " >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="role">Member Type</label>
                                <select id="role" class="form-control" name="role">
                                    @if ($user->role == 1)
                                    @if (auth()->user()->role == 1)
                                    <option value="1" >Admin</option>
                                    @endif
                                    
                                        <option value="1" selected>Admin</option>
                                        <option value="0">Member</option>
                                    @else
                                    @if (auth()->user()->role == 1)
                                    <option value="1" >Admin</option>
                                    @endif
                                    
                                    <option value="0" selected>Member</option>
                                    @endif
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="dob">Date of birth</label>
                                <input id="dob" class="form-control" type="date" name="dob" value="{{ $user->dob}}" >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="phone">Phone</label>
                                <input id="phone" class="form-control" type="text" name="phone" value=" {{ $user->phone}} " >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" value=" {{ $user->email}} " >
                            </div>

                            {{-- <div class="form-group col-md-6 ">
                                <label for="password">New Password</label>
                                <input id="password" class="form-control" type="text" placeholder="Password" name="password">
                            </div> --}}
                            <div class="form-group  ">

                            <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                
                
                
                        </form>

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