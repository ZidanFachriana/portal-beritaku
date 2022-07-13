<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\
Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

    
        return view('dashboard', [
            'user' => User::count(),
            'artikel' => Artikel::count()
        ]);


    }
}
