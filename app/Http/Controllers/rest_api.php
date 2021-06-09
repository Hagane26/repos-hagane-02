<?php

namespace App\Http\Controllers;

use App\Models\rest_api_model;
use Illuminate\Http\Request;

class rest_api extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $api_key = $_GET['api_key'];

        echo "api key = " . $api_key;
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
     * @param  \App\Models\rest_api_model  $rest_api_model
     * @return \Illuminate\Http\Response
     */
    public function show(rest_api_model $rest_api_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rest_api_model  $rest_api_model
     * @return \Illuminate\Http\Response
     */
    public function edit(rest_api_model $rest_api_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rest_api_model  $rest_api_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rest_api_model $rest_api_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rest_api_model  $rest_api_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(rest_api_model $rest_api_model)
    {
        //
    }
}
