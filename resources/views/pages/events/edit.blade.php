@extends('layouts.main')
@section('content')
<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Events</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">event</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add event</h3>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{ route('event.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title<span style="color: red;">*</span> </label>
                                            <input type="text" name="title" value="{{$event->title}}" class="form-control"
                                                placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="role">Description<span style="color: red;">*</span></label>
                                            <textarea name="description" id="" class="form-control" cols="30" rows="10">
{{$event->description}}
                                        </textarea>
                                        </div>
                                    </div>


                                </div>

                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
