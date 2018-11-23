<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Toauth2Controller extends Controller
{
    //Get The access token
    public function getToken()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api-staging.globedreamers.fr/oauth/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=password&client_id=3&client_secret=aRpYMU6WAB07CoZpaUxWI9kCRmranXjaSVQLeDMs&username=alexandre.r@globedreamers.com&password=abc123");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return json_decode($result, true)["access_token"];
    }

    function getusers()
    {
        $access_token = $this->getToken();
        $headers = array(
            'Content-Type: application/json',
            sprintf('Authorization: Bearer %s', $access_token)
        );

        $curl = curl_init("https://api-staging.globedreamers.fr/api/v1/users");

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        return $result;
    }
}
