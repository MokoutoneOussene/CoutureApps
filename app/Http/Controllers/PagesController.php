<?php

namespace App\Http\Controllers;

use App\Models\clients\Client;
use Illuminate\Http\Request;
use App\Models\depenses\Depense;
use App\Models\Info;
use App\Models\Mesur;
use App\Models\modeles\Modele;
use App\Models\payements\Payement;
use App\Models\rendezVous\Rendezvous;

class PagesController extends Controller
{
    public function accueil()
    {
        $date = date("Y-m-d");
        return view('pages.accueil', [
            'depenses' => Depense::all(),
            'clients' => Client::all(),
            'payements' => Payement::all(),
            'modeles' => Modele::all(),
            'mesures' => Mesur::all(),
            'rendez' => Rendezvous::all(),
            'rdvj' => RendezVous::where('date', '=', $date)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forms()
    {
        return view('formulaire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        return view('liste', [
            'listes' => Info::orderBy('nom', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Info::create($request->all());

        return redirect()->back()->with('message', 'Vos informations ont été enregistrée avec success !');
    }
}
