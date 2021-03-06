<?php

namespace App\Http\Controllers;

use App\Models\Chama;
use App\Http\Requests\StoreChamaRequest;
use App\Http\Requests\UpdateChamaRequest;
use App\Models\ChamaUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamas = Chama::latest()->withcount('users')->get();
        return view('pages.chamas.index', compact('chamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChamaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChamaRequest $request)
    {
        $chama = Chama::create($request->validated());
        return redirect()->route('chamas.index')->with('success', "Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chama  $chama
     * @return \Illuminate\Http\Response
     */
    public function show(Chama $chama)
    {

        return view('pages.chamas.show', compact('chama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chama  $chama
     * @return \Illuminate\Http\Response
     */
    public function edit(Chama $chama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChamaRequest  $request
     * @param  \App\Models\Chama  $chama
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChamaRequest $request, Chama $chama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chama  $chama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chama $chama)
    {
        //
    }

    public function joinChama(Chama $chama)
    {
        # code...
        $userId = auth()->user()->id;
        $chama = $chama->users()->attach([$userId => [
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        return redirect()->back()->with('success', "You Successfully joined chama");
    }
    public function leaveChama(Request $request, Chama $chama)
    {
        # code...
        $userId =  User::find($request->user_id)->id;
        $chama = $chama->users()->detach([$userId]);
        return redirect()->back()->with('success', "You Successfully removed user from the chama");
    }
    public function approveChamaMember(Request $request, Chama $chama)
    {
        # code...
        $userId =  User::find($request->user_id)->id;
        // $chama = $chama->users()->detach ([$userId]) ;
        $data = ChamaUser::where('chama_id', $chama->id)->where('user_id', $userId)->first();
        $data['approved'] = 1;
        $data->save();
        return redirect()->back()->with('success', "You Successfully approved user");
    }

    public function disbursementChamaAmount(Chama $chama)
    {
        # Members will receive disbursement of their respective chama amount  randomly
     
        $chamaMembers = $chama->users->count();
        $users = [];
        foreach ($chama->users as $key => $user) {

            if ($user->balance > $chama->amount) {
                $d = ChamaUser::where('received', 0)->where('chama_id', $chama->id)->first();
                array_push($users, $d->user_id);
            } else {
                Session::flash("error", "Some members Do not have enough Amount");
            }
        }

        // dd($users) ;

        $user = User::find($users[0]);
        $amountDeposit = $chamaMembers * $chama->amount;
        $user->deposit($amountDeposit);

        $dd = ChamaUser::where('chama_id', $chama->id)->where('user_id',$user->id) ->first();
        $dd->received = 1 ;
        $dd->receive_date = now() ;
        $dd->save();


        return back()->with("success", "Disbursement done successfully");
    }
}
