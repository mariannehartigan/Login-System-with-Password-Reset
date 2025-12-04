<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        auth()->user()->items()->create([
            'description' => $request->description,
        ]);
        return back();
    }

    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return redirect()->back();
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back();
    }
}