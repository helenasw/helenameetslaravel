<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller {

    /** Require login */
    public function __construct() {
        $this->middleware('auth');
    }

    /** Show the survey form */
    public function index() {
        return view('survey');
    }
}
