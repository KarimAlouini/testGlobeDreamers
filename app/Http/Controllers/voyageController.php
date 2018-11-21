<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voyageController extends Controller
{
    //Redirect the user to login page if he is not connected
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Get the voyage list from the api
    public function getVoyage()
    {
        $url = "https://api-staging.globedreamers.fr/api/v1/travels/list/all";
        $vqr = file_get_contents($url);
        $voyage = json_decode($vqr, true)['data'];

        return view('Voyage/list', array('voyage' => $voyage));
    }
}
