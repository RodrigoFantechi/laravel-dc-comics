<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data =[
            'tumblers' => Comic::all(),
            'nav_links' => config('links.header_links'),
            'links' => config('links.Footer_links'),
        ];
        
        return view('guest.index',$data);
    }

    public function show(Comic $comic)
    {
        $data =[
            'nav_links' => config('links.header_links'),
            'links' => config('links.Footer_links'),
        ];
        return view('guest.show',$data, compact('comic'));
    }
}
