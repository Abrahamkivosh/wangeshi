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
                <h4 class="text-themecolor">Tickets</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Chamas</li>
                        <li class="breadcrumb-item active">Chama</li>

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
                        <h4 class="card-title"> {{ $chama->name }} Details </h4>
                        <h6 class="card-subtitle">{{$chama->name }} information 

                            <form action="{{route('join.chama',$chama)}}" method="post" class=" float-right  " >
                                @csrf
                                <button type="submit" class="btn btn-info">Join Chama</button>
                            </form>
                        
                        </h6>
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-info text-center">
                                        <h1 class="font-light text-white"> {{ $chama->users->count()}} </h1>
                                        <h6 class="text-white">Total members</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-primary text-center">
                                        <h1 class="font-light text-white"> {{$chama->amount}} </h1>
                                        <h6 class="text-white">Chama Amount</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-success text-center">
                                        <h1 class="font-light text-white">{{$chama->duration}}</h1>
                                        <h6 class="text-white">Chama Duration</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">{{$chama->location}}</h1>
                                        <h6 class="text-white">Chama Location</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Member Sense</th>
                                        <th>Received</th>
                                        <th>Get Amount Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($chama->users as $key => $user)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{$user->profile_photo_url}}"
                                                 alt="user" class="img-circle" /> {{$user->first_name . " ". $user->last_name}}</a>
                                        </td>
                                        <td>{{$user->phone}}</td>
                                        <td> 
                                            @if ($user->pivot->approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-warning">Not Approved</span>
                                            @endif
                                            
                                        </td>
                                        <td> {{$user->pivot->created_at->format("d-M-Y")}} </td>
                                        <td> 
                                            @if ($user->pivot->received)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                            
                                        </td>

                                        <td>{{$user->pivot->receive_date ?? "N/A"}}</td>
                                        <td>
                                            <form action="{{ route('leave.chama',$chama) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <button type="submit" class="btn btn-primary">Remove</button>
                                            </form>
                                            <form action="{{ route('approve.chama.member',$chama) }}" method="POST" >
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <button type="submit" class="btn btn-info"> <i class="mid mid-f621" ></i> Approve</button>
                                            </form>
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
                                        <th>Status</th>
                                        <th>Member Sense</th>
                                        <th>Get Amount Date</th>
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