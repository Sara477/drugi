<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZemljaResurs;
use Illuminate\Http\Request;

class ZemljaController extends Controller
{
    public function index()
    {
        return ZemljaResurs::collection(\App\Models\Zemlja::all());
    }

    public function show($id)
    {
        return new ZemljaResurs(\App\Models\Zemlja::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
        ]);

        $zemlja = \App\Models\Zemlja::create($validatedData);

        return new ZemljaResurs($zemlja);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'naziv' => 'required',
        ]);

        $zemlja = \App\Models\Zemlja::findOrFail($id);
        $zemlja->update($validatedData);

        return new ZemljaResurs($zemlja);
    }

    public function destroy($id)
    {
        $zemlja = \App\Models\Zemlja::findOrFail($id);
        $zemlja->delete();

        return response()->json(null, 204);
    }

}
