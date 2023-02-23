<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class PagesController extends Controller
{
    
    public function index()
    {
        $product = Comic::all();
        return view ('home', compact('product'));
    }
}
