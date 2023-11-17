<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $mySkills=Skill::all();


        return view("admin.skills.main",compact("mySkills"));

    }
    public function create(){

        return view("admin.skills.create");

    }
    public function store(request $request){
        request()->validate([
            "language"=>["required","min:3","max:15"],
            "pourcentage"=>["required","numeric"],
            "description"=>["required"],

        ]);





        $skills = new Skill();
        $skills->language= $request->language;
        $skills->pourcentage= $request->pourcentage;
        $skills->description= $request->description;
        $skills->save();

        return redirect()->route("skills.index")->with("success","validation");


    }
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route("skills.index")->with("warning","Donnée supprimée");

    }

    public function show(Skill $id){

        return view("admin.skills.show",compact('id'));

    }
    public function edit(Skill $id){
        return view("admin.skills.edit",compact("id"));

    }
    public function update(request $request,Skill $id){

        $id->language=$request->language;
        $id->pourcentage=$request->pourcentage;
        $id->description=$request->description;
        $id->save();

        return redirect()->route("skills.index");

    }
}
