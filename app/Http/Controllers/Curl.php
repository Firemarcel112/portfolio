<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curl extends Controller
{
    protected string $username;
    protected string $password;
    protected string $token;
    protected array $headers;
    public function get($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);

        $result = curl_exec($curl);
        if(curl_errno($curl)) {
            if (env('APP_DEBUG')) {
                dd('Error with cURL: ' . curl_error($curl));
            }
        }
        curl_close($curl);
        return $result;

    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    public function setHeaders($headers) {
        $this->headers[] = $headers;
    }

    public function getToken() {
        return $this->token;
    }
}
