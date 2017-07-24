<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use function session;

class HomeController extends Controller
{

    public function index()
    {

        $areas = Area::get()->toTree();


        return view('home', compact('areas'));

    }
}
