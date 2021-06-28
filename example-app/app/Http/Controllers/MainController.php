<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Heb een main controller aangemaakt om naar andere pagina's toe te gaan */

class MainController extends Controller
{
    public function hobby(Request $request)
    {
        // dd($request);
        return view('hobby');
    }
    public function Programma()
    {
        return view('Programma');
    }
    public function WieBenIk()
    {
        return view('WieBenIk');
    }
}
