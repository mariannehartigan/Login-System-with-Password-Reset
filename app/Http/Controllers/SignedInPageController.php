<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignedInPageController extends Controller
{
    public function index()
    {
        return inertia(
            'SignedInPage'
        );
    }
}
