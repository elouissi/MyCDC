<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cahier_de_chargeController extends Controller
{
    public function siteVitrine(){
        return view("cahier_de_charges.siteVitrine");
    }
    public function mobile(){
        return view("cahier_de_charges.mobile");
    }
    public function ecommerce(){
        return view("cahier_de_charges.e-commerce");
    }
}
