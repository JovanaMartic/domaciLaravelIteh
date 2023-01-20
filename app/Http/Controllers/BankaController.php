<?php

namespace App\Http\Controllers;

use App\Models\Banka;
use Illuminate\Http\Request;

class BankaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banke = Banka::all();

        return response()->json($banke);
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
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function show($banka)
    {
        return response()->json(Banka::find($banka));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function edit(Banka $banka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banka $banka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function destroy($banka)
    {
        $banka = Banka::find($banka)->delete();
        return response()->json('Banka je obrisana!');
    }
}
