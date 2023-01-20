<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korisnici = Korisnik::all();

        return response()->json($korisnici);
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
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function show($korisnik)
    {
        return response()->json(Korisnik::find($korisnik));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Korisnik $korisnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $korisnik)
    {
        $validator = Validator::make($request->all(), [
            'imeprezime' => 'required|string',
            'jmbg' => 'required|integer',
            'username' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email',
            'banka_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $korisnik = Korisnik::find($korisnik);
        $korisnik->imeprezime = $request->imeprezime;
        $korisnik->jmbg = $request->jmbg;
        $korisnik->username = $request->username;
        $korisnik->password = $request->password;
        $korisnik->email = $request->email;
        $korisnik->banka_id = $request->banka_id;
        $korisnik->update();

        return response()->json('Korisnik je azuriran!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korisnik $korisnik)
    {
        //
    }
}
