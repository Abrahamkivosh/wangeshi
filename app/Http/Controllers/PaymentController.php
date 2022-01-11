<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\User;
use App\Payment\MpesaGateway;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( request()->has('filter') ) {
            # code...
        }
       
        if ( auth()->user()->role == 1 ) {
            # code...
            $payments = Payment::latest()->get();
        } else {
            # code...
            $payments  =  auth()->user()->payments;
        }
        
        return view('pages.payments.index',compact('payments')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        $data = $request->validated() ;
        $user = User::find(auth()->user()->id) ;
       
    }

    public function loadWallet( $request, MpesaGateway $mpesaGateway, User $user)
    {
        $user = auth()->user();
        $amount = $request->amount;
        $phone = $request->phone;


        try {
            $response = $mpesaGateway->lipaNaMPesaOnlineAPI($phone, $amount);

            $user->payments()->create([
                'user_id' => auth()->user()->id,
                'merchantRequestID' => $response['MerchantRequestID'],
                'checkoutRequestID' => $response['CheckoutRequestID'],
                'responseCode' => $response['ResponseCode'],
                'responseDescription' => $response['ResponseDescription'],
                'customerMessage' => $response['CustomerMessage'],
                'phoneNumber' => $phone,
                'amount' => $amount,
                'type'=> $request['type']
            ]);
            $user->deposit($amount);
            return back()->with('message', $response['CustomerMessage']);
        } catch (\Throwable $th) {
            return   back()->with('error', $th->getMessage());
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
