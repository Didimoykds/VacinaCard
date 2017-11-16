<?php

namespace App\Http\Controllers\Web;

use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class Site extends Controller
{
    public function index () {
        dd(Auth::user()->id);
        return View('app\menu');
    }
}
