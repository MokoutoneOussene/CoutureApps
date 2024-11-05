<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clients\Client;
use App\Models\modeles\Modele;
use App\Models\payements\Payement;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.payements.payement', [
            'payements' => Payement::orderBy('id', 'DESC')->get(),
            'clients' => Client::orderBy('id', 'DESC')->get(),
            'modeles' => Modele::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function credit()
    {
        $res = 0;
        return view('pages.payements.credit', [
            'credit' => Payement::where('reste', '>', $res)->get(),
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
        $reste = $request->somme - $request->avance;
        Payement::create([
            'id_client' => $request->id_client,
            'id_modele' => $request->id_modele,
            'somme' => $request->somme,
            'avance' => $request->avance,
            'motif' => $request->motif,
            'reste' => $reste,
            'date' => $request->date,
        ]);

        return redirect()->route('gestion-payement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.payements.find', [
            'finds' => Payement::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.payements.edit', [
            'finds' => Payement::find($id),
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
        $pay = Payement::find($request->id);
        $avnce = $pay->avance;
        $avc = $request->avance + $avnce;
        $reste = $request->reste - $request->avance;
        $pay->update([
            'id_client' => $request->id_client,
            'id_modele' => $request->id_modele,
            'somme' => $request->somme,
            'avance' => $avc,
            'motif' => $request->motif,
            'reste' => $reste,
            'date' => $request->date,
        ]);

        return redirect()->route('gestion-payement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pay = Payement::find($id);
        $pay->delete();

        return redirect()->route('gestion-payement.index');
    }
}
