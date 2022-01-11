<?php

namespace App\Http\Controllers;

use App\Models\ChamaUser;
use App\Http\Requests\StoreChamaUserRequest;
use App\Http\Requests\UpdateChamaUserRequest;

class ChamaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreChamaUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChamaUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChamaUser  $chamaUser
     * @return \Illuminate\Http\Response
     */
    public function show(ChamaUser $chamaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChamaUser  $chamaUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ChamaUser $chamaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChamaUserRequest  $request
     * @param  \App\Models\ChamaUser  $chamaUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChamaUserRequest $request, ChamaUser $chamaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChamaUser  $chamaUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChamaUser $chamaUser)
    {
        //
    }
}
