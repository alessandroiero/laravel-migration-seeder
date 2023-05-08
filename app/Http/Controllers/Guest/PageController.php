<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = Train::where('orario_partenza', '>=', now('Europe/Rome'))->get();;

        return view('home', compact('trains'));}
}
