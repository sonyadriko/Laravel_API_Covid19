<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index(){
      
    }

    public function pageina(){
        $response = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');
        $data = $response->json();
        // dd($data);
        return view('data_ina', compact('data'));
    }

    public function pageglobal(){
        $response2 = Http::get('https://api.kawalcorona.com/');
        $data2 = $response2->json();
          // dd($data2);
        return view('data_global', compact('data2'));
    }
}
