@extends('layouts.main')
@section('content')
<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Issues</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Issues</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0"> Issue  </h3>
                  
                    <br>
                    <div class="row">
                        <ul class="list-group">
                            <li class="list-group-item ">Writen By : {{$issue->user->first_name . " ". $issue->user->last_name}} </li>
                            <p>
                                {{ $issue->description }}
                            </p>
                            <p>
                                Created On {{$issue->created_at->format("d / M / Y")}}

                                <form action="{{route('issues.destroy',$issue)}}" class=" float-right " method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </p>
                        </ul>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
