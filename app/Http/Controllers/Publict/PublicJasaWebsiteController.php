<?php

namespace App\Http\Controllers\Publict;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicJasaWebsiteController extends Controller
{

    public function index(Request $request)
    {
        return view('public.jasa_website.index');
    }
}
