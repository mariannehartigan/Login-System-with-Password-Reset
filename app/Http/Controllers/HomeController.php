<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home', [
                'items' => Item::where('userId', auth()->id())->get()
        ]);
    }
}
