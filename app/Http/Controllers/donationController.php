<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donationController extends Controller
{
    //Redirect the user to login page if he is not connected
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Get the donation list from the api
    public function getDonation()
    {
        $url = "https://api-staging.globedreamers.fr/api/v1/travels/donations/list";
        $vqr = file_get_contents($url);
        $donation = json_decode($vqr, true)['data'];

        return view('Donation/list', array('donation' => $donation));
    }
}
