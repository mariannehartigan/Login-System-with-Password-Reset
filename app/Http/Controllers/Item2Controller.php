<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item2;

class Item2Controller extends Controller
{
    public function index()
    {
        return inertia('Item2', [
                'item2s' => Item2::where('userId', auth()->id())->get()
        ]);
    }

    public function store(Request $request)
    {
        auth()->user()->item2s()->create([
            'description' => $request->description,
        ]);
        return back();
    }

    public function update(Request $request, Item2 $item2)
    {
        $item2->update($request->all());
        return redirect()->back();
    }

    public function destroy(Item2 $item2)
    {
        $item2->delete();
        return redirect()->back();
    }
}
