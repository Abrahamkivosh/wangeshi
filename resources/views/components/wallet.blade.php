<span>
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

</span>