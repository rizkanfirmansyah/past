<?php

namespace App\Http\Controllers;

class HomeClient extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('page.dashboard.index', [
            'titlePage' => 'Home',
            'titleCrumbs' => 'Home Page',
            'currentCrumbs' => '/master',
        ]);
    }

    public function rank()
    {
        return view('page.rank.index', [
            'titlePage' => 'Rank',
            'titleCrumbs' => 'Rank Page',
            'currentCrumbs' => '/master/rank',
        ]);
    }
}