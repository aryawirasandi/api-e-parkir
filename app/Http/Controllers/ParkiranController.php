<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Parkiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkiranController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allParkiran()
    {
        return Parkiran::All();
    }


}

