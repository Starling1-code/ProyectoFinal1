<?php

namespace App\Http\Controllers;

use App\Trailers;
use Illuminate\Http\Request;

class TrailersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('trailers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('trailers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function show(Trailers $trailers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function edit(Trailers $trailers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trailers $trailers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trailers $trailers)
    {
        //
    }
}
