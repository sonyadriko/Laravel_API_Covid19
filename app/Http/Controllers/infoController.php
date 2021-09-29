<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index(){
        $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');
        $data = $response->json();
        // dd($data);
        return view('index', compact('data'));
    }
}
