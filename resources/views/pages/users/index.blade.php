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
                <h4 class="text-themecolor">Members</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">members</li>
                    </ol>
                   

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
                        <h4 class="card-title">All Members</h4>
                        <h6 class="card-subtitle">Members available</h6>
                     
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
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
                                        <td>{{++$key}}</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{$user->profile_photo_url}}"
                                                 alt="user" class="img-circle" /> {{$user->first_name . " ". $user->last_name}}</a>
                                        </td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            @if ($user->role)
                                                <span class="badge badge-pill badge-info">Admin</span>
                                            @else
                                            <span class="badge badge-pill badge-warning">Member</span>
                                            @endif
                                             </td>
                                        <td> {{$user->balance}} </td>
                                        <td> {{$user->created_at->format("d-M-Y")}} </td>
                                     

                                        <td>
                                            <a class="btn btn-info" href="{{route('users.show',$user)}}">View</a>
                                           
                                          
                                        </td>
                                    </tr>
                                        
                                    @empty
                                    <tr>
                                        <td colspan="5"  class="text text-danger">
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