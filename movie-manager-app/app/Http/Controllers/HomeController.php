<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the homepage content.
     */
    public function showHomePage(): View
    {
        return view('homepage');
    }
}
