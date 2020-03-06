<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getIP()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
}
