<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autenticacion extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $arr = [
            $client_id = $req->client_id,
            $client_secret = $req->client_secret,
            $grant_type = $req->grant_type,
            $redirect_uri= "https://dev.badrweb.es/auth",
            $code= $req->code
        ];
        return $arr;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
