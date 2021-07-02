<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PlayerController extends Controller
{
    public function play()
    {
        return Inertia::render('Player/Play');
    }
}
