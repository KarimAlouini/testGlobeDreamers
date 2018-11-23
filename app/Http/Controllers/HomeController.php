<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "https://api-staging.globedreamers.fr/api/v1/travels/list/all";
        $vqr = file_get_contents($url);
        $voyage = json_decode($vqr, true)['data'];

        $nbvoyage = count($voyage);


        $vqr = app('App\Http\Controllers\Toauth2Controller')->getusers();

        $voyageur = json_decode($vqr, true)['data'];
        $nbvoyageur = count($voyageur);


        return view('home', array('nbvoyageur' => $nbvoyageur, 'nbvoyage' => $nbvoyage));

    }
}
