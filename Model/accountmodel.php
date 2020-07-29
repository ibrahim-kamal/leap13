<?php 
class account
{
    function login($Username,$Password){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://nilepromotion.com/pa-test/wp-json/test/v2/creds?%20username=".$Username."&password=".$Password."",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic bGVhcDEzOmxlYXAxM3Bhc3M="
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }    
}
