<?php

namespace App\Http\Controllers;

use App\Models\Chama;
use App\Http\Requests\StoreChamaRequest;
use App\Http\Requests\UpdateChamaRequest;

class ChamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamas = Chama::all();
        return view('pages.chamas.index',compact('chamas')) ;
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
     * @param  \App\Http\Requests\StoreChamaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChamaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chama  $chama
     * @return \Illuminate\Http\Response
     */
    public function show(Chama $chama)
    {
        //
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
}
