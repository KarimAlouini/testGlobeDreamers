<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voyageurController extends Controller
{
    //Redirect the user to login page if he is not connected
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Get the voyageur list from the api
    public function getVoyageur()
    {
        $url = "https://api-staging.globedreamers.fr/api/v1/users";
        $vqr = file_get_contents($url);
        $voyageur = json_decode($vqr,true)['data'];

        return view('Voyageur/list',array('voyageur'=>$voyageur));
    }
}
