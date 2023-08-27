<?php

namespace App\Http\Controllers;

use App\Http\Resources\KafaResurs;
use Illuminate\Http\Request;

class KafaController extends Controller
{
    public function index()
    {
        return KafaResurs::collection(\App\Models\Kafa::all());
    }

    public function show($id)
    {
        return new KafaResurs(\App\Models\Kafa::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
            'opis' => 'required',
            'zemlja_id' => 'required',
            'tip_id' => 'required',
            'cena' => 'required',
        ]);

        $kafa = \App\Models\Kafa::create($validatedData);

        return new KafaResurs($kafa);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
            'opis' => 'required',
            'zemlja_id' => 'required',
            'tip_id' => 'required',
            'cena' => 'required',
        ]);

        $kafa = \App\Models\Kafa::findOrFail($id);
        $kafa->update($validatedData);

        return new KafaResurs($kafa);
    }

    public function destroy($id)
    {
        $kafa = \App\Models\Kafa::findOrFail($id);
        $kafa->delete();

        return response()->json(null, 204);
    }
}
