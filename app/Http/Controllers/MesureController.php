<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clients\Client;
use App\Models\Mesur;
use Illuminate\Http\Request;

class MesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.mesures.index', [
            'mesures' => Mesur::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mesures.create', [
            'clients' => Client::All(),
            'mesures' => Mesur::All()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mesur::create([
            'epaule' => $request->epaule,
            'poitrine' => $request->poitrine,
            'lng_manche' => $request->lng_manche,
            'tour_manche' => $request->tour_manche,
            'lng_chemise' => $request->lng_chemise,
            'ceinture' => $request->ceinture,
            'bassin' => $request->bassin,
            'cuisse' => $request->cuisse,
            'poignet' => $request->poignet,
            'lng_pantalon' => $request->lng_pantalon,
            'tour_taille' => $request->tour_taille,
            'long_taille' => $request->long_taille,
            'lng_camisole' => $request->lng_camisole,
            'log_jupe' => $request->log_jupe,
            'genoux' => $request->genoux,
            'bas' => $request->bas,
            'col' => $request->col,
            'dos' => $request->dos,
            'pince' => $request->pince,
            'long_robe' => $request->long_robe,
            'date' => $request->date,
            'id_client' => $request->id_client,
        ]);

        return redirect()->route('gestion-mesures.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.mesures.find', [
            'finds' => Mesur::find($id),
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
        return view('pages.mesures.edit', [
            'clients' => Client::All(),
            'modif' => Mesur::find($id),
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
        $mesure = Mesur::find($request->id);
        $mesure->update([
            'epaule' => $request->epaule,
            'poitrine' => $request->poitrine,
            'lng_manche' => $request->lng_manche,
            'tour_manche' => $request->tour_manche,
            'lng_chemise' => $request->lng_chemise,
            'ceinture' => $request->ceinture,
            'bassin' => $request->bassin,
            'cuisse' => $request->cuisse,
            'poignet' => $request->poignet,
            'lng_pantalon' => $request->lng_pantalon,
            'tour_taille' => $request->tour_taille,
            'long_taille' => $request->long_taille,
            'lng_camisole' => $request->lng_camisole,
            'log_jupe' => $request->log_jupe,
            'genoux' => $request->genoux,
            'bas' => $request->bas,
            'col' => $request->col,
            'dos' => $request->dos,
            'pince' => $request->pince,
            'long_robe' => $request->long_robe,
            'date' => $request->date,
            'id_client' => $request->id_client,
        ]);

        return redirect()->route('gestion-mesures.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesure = Mesur::find($id);
        $mesure->delete();

        return redirect()->route('gestion-mesures.create');
    }
}
