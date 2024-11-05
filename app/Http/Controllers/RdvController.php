<?php

namespace App\Http\Controllers;

use App\Models\clients\Client;
use App\Models\modeles\Modele;
use App\Models\rendezVous\Rendezvous;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.rendezVous.rendezvous', [
            'rendez' => Rendezvous::orderBy('id', 'DESC')->get(),
            'clients' => Client::all(),
            'modeles' => Modele::all(),
        ]);
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
        Rendezvous::create([
            'id_client' => $request->id_client,
            'id_modele' => $request->id_modele,
            'motif' => $request->motif,
            'date' => $request->date,
        ]);

        return redirect()->route('gestion-rdv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.rendezVous.edit', [
            'finds' => Rendezvous::find($id),
            'clients' => Client::all(),
            'modeles' => Modele::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rdv = Rendezvous::find($request->id);
        $rdv->update([
            'id_client' => $request->id_client,
            'id_modele' => $request->id_modele,
            'motif' => $request->motif,
            'date' => $request->date,
        ]);

        return redirect()->route('gestion-rdv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rdv = Rendezvous::find($id);
        $rdv->delete();

        return redirect()->route('gestion-rdv.index');
    }
}
