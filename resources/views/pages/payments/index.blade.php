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
                <h4 class="text-themecolor">Payments  : <span> Balance {{ Auth::user()->balance }} KSH </span> </h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Payments</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"  data-toggle="modal"
                     data-target="#modaldeposit"><i class="fa fa-plus-circle"></i> Deposit </button>
                     <button type="button" class="btn btn-info d-none d-lg-block m-l-15"  data-toggle="modal"
                     data-target="#modalwithdraw"><i class="fa fa-plus-circle"></i> Withdraw </button>
                    <!-- Button trigger modal -->
                  
                    
                    <!-- Modal deposit -->
                    <div class="modal fade" id="modaldeposit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Deposit Amount Via Mpesa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <form action="{{ route('payments.store') }}" method="post">
                                    @csrf
                                <div class="modal-body row">
                                    
                                        <div class="form-group col-12 ">
                                          <label for="name">Deposit Amount</label>
                                          <input type="text" name="amount" id="amount" class="form-control" placeholder="deposit amount">
                                        </div>
                                        <input type="hidden" name="type" value="0">

                                        <div class="form-group col-12 ">
                                            <label for="phone">Phone Number </label>
                                            <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}" class="form-control" placeholder=" phone">
                                          </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Deposit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>


                     <!-- Modal withdraw -->
                     <div class="modal fade" id="modalwithdraw" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Withdraw Amount Via Mpesa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <form action="{{ route('payments.store') }}" method="post">
                                    @csrf
                                <div class="modal-body row">
                                    
                                        <div class="form-group col-12 ">
                                          <label for="name">Withdraw Amount</label>
                                          <input type="text" name="amount" id="amount" class="form-control" placeholder="Withdraw amount">
                                        </div>
                                        <input type="hidden" name="type" value="1">

                                        <div class="form-group col-12 ">
                                            <label for="phone">Phone Number </label>
                                            <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}" class="form-control" placeholder=" phone">
                                          </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Withdraw</button>
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
                        <h4 class="card-title">All Wallet Transactions</h4>
                        <h6 class="card-subtitle">Transaction available</h6>
                     
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Auth::user() ->transactions ->reverse()  as $trans)
                                    <tr>
                                        <td>{{ $trans -> type }}</td>
                                        <td>{{ $trans -> amount }}</td>
                                        <td>{{ $trans -> confirmed ? "Paid" : "Unpaid" }}</td>
                                        <td>{{ $trans -> created_at }}</td>
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