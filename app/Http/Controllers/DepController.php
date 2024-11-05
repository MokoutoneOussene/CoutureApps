<?php

namespace App\Http\Controllers;

use App\Models\depenses\Depense;
use App\Models\personnels\Personnel;
use Illuminate\Http\Request;

class DepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.depenses.depense', [
            'personnels' => Personnel::orderBy('id', 'DESC')->get(),
            'depenses' => Depense::all()
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
            Depense::create([
            'description' => $request->description,
            'date' => $request->date,
            'id_personnel' => $request->id_personnel,
            'montant' => $request->montant,
        ]);

        return redirect()->route('gestion-depense.index');
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
        return view('pages.depenses.edit', [
            'finds' => Depense::find($id),
            'personnels' => Personnel::all()
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
        $deps = Depense::find($request->id);
        $deps->update([
            'description' => $request->description,
            'date' => $request->date,
            'id_personnel' => $request->id_personnel,
            'montant' => $request->montant,
        ]);

        return redirect()->route('gestion-depense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deps = Depense::find($id);
        $deps->delete();

        return redirect()->route('gestion-depense.index');
    }
}
