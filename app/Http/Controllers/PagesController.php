<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chain;

class PagesController extends Controller
{
    public function index()
    {   
        
        return view('welcome');
    }
}
