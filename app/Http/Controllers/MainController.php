<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\View\View;

class MainController extends Controller
{
    public function showAll(): View
    {
        $personDied = DB::table('osoby_zmarle')->get();

        return view('pages.home', ['personDied' => $personDied]);
    }
}
