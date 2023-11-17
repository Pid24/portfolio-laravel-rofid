<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $myContact=Contact::all();


        return view("admin.contacts.main",compact("myContact"));

    }

    public function create(){

        return view("admin.contacts.create");

    }

    public function store(request $request){
        request()->validate([

            "titre"=>["required"],
            "description"=>["required"],
            "adresse"=>["required","min:15","max:50"],
            "telephone"=>["required","numeric"],
            "email"=>["required"],
        ]);




        $contacts = new Contact();
        $contacts->titre= $request->titre;
        $contacts->description= $request->description;
        $contacts->adresse= $request->adresse;
        $contacts->telephone= $request->telephone;
        $contacts->email= $request->email;
        $contacts->save();

        return redirect()->route("contacts.index")->with("success","validation");


    }

    public function destroy(Contact $id){

        $id->delete();

        return redirect()->route("contacts.index")->with("warning","Donnée supprimée");

    }
    public function show(Contact $id){

        return view("admin.contacts.show",compact('id'));


}
public function edit(Contact $id){
    return view("admin.contacts.edit",compact("id"));

}

public function update(request $request,Contact $id){

    $id->titre=$request->titre;
    $id->description=$request->description;
    $id->adresse=$request->adresse;
    $id->telephone=$request->telephone;
    $id->email=$request->email;
    $id->save();

    return redirect()->route("contacts.index");

}

}
