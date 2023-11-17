<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Profil;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $profils=Profil::all();
        $skills= Skill::all();
        $portfolios= Portfolio::all();
        $contacts= Contact::all();

        return view("home",compact("profils","skills","portfolios","contacts"));
    }

    public function portfolio(){
        
        $myPortfolio=Portfolio::all();

        return view("portfolio",compact("myPortfolio"));
    }

    public function admin(){

        return view("admin.dashboard");

    }
}
