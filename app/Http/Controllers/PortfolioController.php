<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $myPortfolio=Portfolio::all();


        return view("admin.portfolios.main",compact("myPortfolio"));

    }

    public function create(){

        return view("admin.portfolios.create");
       }
       public function store(request $request){

        request()->validate([

            "titre"=>["required","min:7","max:30"],
            "image"=>["required"],
            "date"=>["required","numeric"],
            "url"=>["required"],
            "sujet"=>["required"],
            "monTexte"=>["required"],
            "description"=>["required"],
        ]);

        $portfolios = new Portfolio();
        $portfolios->titre=$request->titre;
        $portfolios->image=$request->image;
        $portfolios->imageSecond=$request->imageSecond;
        $portfolios->imageThird=$request->imageThird;
        $portfolios->date=$request->date;
        $portfolios->url=$request->url;
        $portfolios->description=$request->description;
        $portfolios->sujet=$request->sujet;
        $portfolios->monTexte=$request->monTexte;
        // storage

        $path="img/";
        $file = $request->file("image");
        $new_image_name=date("ymd").uniqid().'.jpg';

        $file->move(public_path($path),$new_image_name);
        $portfolios->image= $new_image_name;

        $path="img/";
        $file = $request->file("imageSecond");
        $new_image_name=date("ymd").uniqid().'.jpg';

        $file->move(public_path($path),$new_image_name);
        $portfolios->imageSecond= $new_image_name;

        $path="img/";
        $file = $request->file("imageThird");
        $new_image_name=date("ymd").uniqid().'.jpg';

        $file->move(public_path($path),$new_image_name);
        $portfolios->imageThird= $new_image_name;

        $portfolios->save();

        return redirect()->route("portfolios.index")->with("success","validation");

    }
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route("portfolios.index")->with("warning","donnée supprimée");

    }

    public function show(Portfolio $id){

        return view("admin.portfolios.show",compact("id"));

       }

       public function edit(Portfolio $id){

        return view("admin.portfolios.edit",compact("id"));

       }

       public function update(request $request,Portfolio $id){

        $id->titre=$request->titre;
        $id->image=$request->image;
        $id->date=$request->date;
        $id->url=$request->url;
        $id->description=$request->description;
        $id->save();

        return redirect()->route("portfolios.index");


       }


}
