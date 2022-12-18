<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormerRequest;
use App\Http\Requests\UpdateFormerRequest;
use App\Models\Former;

class FormerControlle extends Controller
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
     * @param  \App\Http\Requests\StoreFormerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function show(Former $former)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function edit(Former $former)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormerRequest  $request
     * @param  \App\Models\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormerRequest $request, Former $former)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function destroy(Former $former)
    {
        //
    }
}
