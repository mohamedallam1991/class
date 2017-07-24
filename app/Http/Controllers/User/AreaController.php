<?php

namespace App\Http\Controllers\User;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function redirect;
use function session;

class AreaController extends Controller
{

    //
    public function store(Area $area)
    {
        session()->put('area', $area->slug);

        // redirect to category index
        return redirect()->route('category.index', [$area]);
    }
}
