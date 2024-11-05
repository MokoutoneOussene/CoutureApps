<?php

namespace App\Http\Controllers;

use App\Models\personnels\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.personnel.personnel', [
            'personnels' => Personnel::orderBy('id', 'DESC')->get()
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
        $this->validate($request, [
            'nom' =>    ['required', 'string', 'max:150', 'min:2'],
            'prenom' =>    ['required', 'string', 'max:150', 'min:2'],
        ]);
            Personnel::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);

        return redirect()->route('gestion-personnel.index');
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
        return view('pages.personnel.edit', [
            'finds' => Personnel::find($id),
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
        $perso = Personnel::find($request->id);
        $perso->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);

        return redirect()->route('gestion-personnel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pers = Personnel::find($id);
        $pers->delete();

        return redirect()->route('gestion-personnel.index');
    }
}
