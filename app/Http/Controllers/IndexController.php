<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function principal()
    {
        return view ('site.index');
    }
}
