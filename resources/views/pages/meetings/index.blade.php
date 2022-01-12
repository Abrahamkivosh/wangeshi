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
                <h4 class="text-themecolor">meetings</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">meetings</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"  data-toggle="modal" data-target="#modalcreate"><i class="fa fa-plus-circle"></i> Create New</button>
                    <!-- Button trigger modal -->
                  
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create new meeting</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <form action="{{ route('meetings.store') }}" method="post">
                                    @csrf
                                <div class="modal-body row">
                                    
                                        <div class="form-group col-12 ">
                                          <label for="name">Meeting Name</label>
                                          <input type="text" name="name" id="name" class="form-control" placeholder="meeting name">
                                        </div>

                                        <div class="form-group col-12 ">
                                            <label for="theme">Meeting Theme</label>
                                            <input type="text" name="theme" id="theme" class="form-control" placeholder="meeting theme">
                                          </div>
                                      
                                       
                                          <div class="form-group col-6">
                                            <label for="location">Meeting location</label>
                                            <input type="text" name="location" id="location" class="form-control" placeholder="Chama location">
                                          </div>
                                          <div class="form-group col-6 ">
                                            <label for="date">Meeting Date</label>
                                            <input type="datetime-local" name="date" id="date" class="form-control" placeholder="meeting date">
                                           
                                          </div>
                                         
                                          
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
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
                        <h4 class="card-title">All Meetings</h4>
                        <h6 class="card-subtitle">Meetings available</h6>
                     
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>Name</th>
                                        <th>Theme</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meetings as $key => $meeting)
                                    <tr>
                                        <td> {{ ++$key }} </td>
                                        <td> {{ $meeting->name}} </td>
                                        <td> {{ $meeting->theme}} </td>
                                        <td> {{$meeting->location}} </td>
                                        <td> {{ $meeting->date}} </td>
                                        <td>
                                            <form action="{{ route('meetings.destroy', $meeting)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </td>

                                    </tr>
                                        
                                    @endforeach
                                   
                                </tbody>
                                <tfoot>
                                    
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