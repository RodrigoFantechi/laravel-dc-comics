<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
            $tumblers = Comic::all();
        return view('guest.index', compact('tumblers'));
    }

    public function show(Comic $comic)
    {
        return view('guest.show', compact('comic'));
    }
}
