<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cahier_de_chargeController extends Controller
{
    //web
    public function siteVitrine(){
        return view("cahier_de_charges.web.siteVitrine");
    }
    public function Ecommerce(){
        return view("cahier_de_charges.web.E-commerce");
    }
    public function Blog(){
        return view("cahier_de_charges.web.Blog");
    }
    public function Affiliation(){
        return view("cahier_de_charges.web.affiliation");
    }
    public function accueil(){
        return view("welcome"); 
    }
    
    //mobile
    public function App_e_commerce(){
        return view("cahier_de_charges.mobile.App_e_commerce");
    }
    public function E_learning(){
        return view("cahier_de_charges.mobile.E_learning");
    }
    public function Service_X(){
        return view("cahier_de_charges.mobile.Service_X");
    }
    public function List(){
        return view("cahier_de_charges.List");
    }

    //script

    public function script(){
        return view("configuration.script");
    }
}
