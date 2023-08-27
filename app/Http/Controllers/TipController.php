<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipResurs;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index()
    {
        return TipResurs::collection(\App\Models\Tip::all());
    }

    public function show($id)
    {
        return new TipResurs(\App\Models\Tip::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tip' => 'required',
        ]);

        $tip = \App\Models\Tip::create($validatedData);

        return new TipResurs($tip);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tip' => 'required',
        ]);

        $tip = \App\Models\Tip::findOrFail($id);
        $tip->update($validatedData);

        return new TipResurs($tip);
    }

    public function destroy($id)
    {
        $tip = \App\Models\Tip::findOrFail($id);
        $tip->delete();

        return response()->json(null, 204);
    }
}
