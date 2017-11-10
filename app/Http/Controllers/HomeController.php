<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /** Require login */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home', $this->getIndexTemplateData());
    }

    private function getIndexTemplateData() {
        $user = Auth::user();

        return [
            'user_name' => $user ? $user->name : '',
        ];
    }
}
