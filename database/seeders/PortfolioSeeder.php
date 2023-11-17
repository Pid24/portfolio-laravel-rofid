<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([

            [
                "titre"=>" project Site du chef",
                "image"=>"site_chefs.png",
                "imageSecond"=>"blogChefs.png",
                "imageThird"=>"bookChefs.png",
                "date"=>"17.09.21",
                "url"=>"https://github.com/philippeK22/cs-site-chef-20",
                "description"=>"language HTMl et CSS",
                "sujet"=>"this is an example of portfolio details de mon project Site du chefs",
                "monTexte"=>" Le projet site du chefs est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris le language HTML ainsi que l'integration du CSS en réalisant se project. C'est le project qui ma permis de commencer à coder en ayant de bonne base",
                "created_at"=>now()


            ],

            [
                "titre"=> "project calcuatrice",
                "image"=> "calculette.png",
                "imageSecond"=>"calcul.png",
                "imageThird"=>"myCalculette.png",
                "date"=>"09.11.21",
                "url"=> "https://github.com/philippeK22/js-dom-calculatrice",
                "description"=>"language en Javascript",
                "sujet"=>"this is an example of portfolio details de mon projet Calculatrice",
                "monTexte"=>" Le projet calculatrice, est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris le language JavaScript ainsi que l'integration des animations dans mon site web (DOM) en réalisant se projet. C'est le project qui ma permis de commencer à developper ma logique javascript",

                "created_at"=>now()

            ],

            [
                "titre"=>"project emporium ",
                "image"=>"emporium.png",
                "imageSecond"=>"modal-emporium.png",
                "imageThird"=>"cards-emporium.png",
                "date"=>"18.12.21",
                "url"=>"https://github.com/philippeK22/Projet-JS-Emporium",
                "description"=>"language Javascript",
                "sujet"=>"this is an example of portfolio details de mon projet Emporium",
                "monTexte"=>" Le projet Emporium, est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris le language JavaScript ainsi que l'integration des animations dans mon site web (DOM) en réalisant se projet. C'est le project qui ma permis de realiser un site web complet avec des animations fluides en javascript ",
                "created_at"=>now()
            ],

            [
                "titre"=>"project todo list ",
                "image"=>"todolist.png",
                "imageSecond"=>"todo.png",
                "imageThird"=>"exo-todo.png",
                "date"=>"14.11.21",
                "url"=>"https://github.com/philippeK22/js_dom_todolist",
                "description"=>"language Javascript",
                "sujet"=>"this is an example of portfolio details de mon projet Todolist",
                "monTexte"=>" Le projet todolist, est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris le language JavaScript ainsi que l'integration des animations dans mon site web (DOM) en réalisant se projet. C'est le project qui ma permis de commencer à developper ma logique javascript",

                "created_at"=>now()

            ],
            [
                "titre"=>"project E-commerce ",
                "image"=>"e_commerce.png",
                "imageSecond"=>"sport-commerce.png",
                "imageThird"=>"products-commerce.png",
                "date"=>"03.01.22",
                "url"=>"https://github.com/philippeK22/react_projet_ecommerce",
                "description"=>"language React",
                "sujet"=>"this is an example of portfolio details de mon projet E-Commerce",
                "monTexte"=>" Le projet E-commerce, est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris un nouveau languagage  qui est le REACT, j'ai appris à travailler sur differente page de mon site web . C'est le project qui ma permis de commencer à me developper en tant que web developpeur",
                "created_at"=>now()

            ],

            [
                "titre"=>"project DataBase Laravel",
                "image"=>"template_laravel.png",
                "imageSecond"=>"blog_duo.png",
                "imageThird"=>"contact_duo.png",
                "date"=>"15.01.22",
                "url"=>"https://github.com/gencehangurcam/laravel_projet_duo",
                "description"=>"language Php Laravel",
                "sujet"=>"this is an example of portfolio details de mon projet laravel Duo",
                "monTexte"=>" Le projet template laravel, est un project que j'ai du réalisé durant ma formation de devellopeur web full stack. j'ai appris le language PHP, ainsi que le laravel  avec  l'integration de template dans mon site web en gerant les bases de donnés de mon serveur (DATABASE). C'est le project qui ma permis de commencer à me develloper dans le back end",
                "created_at"=>now()
            ]


        ]);
    }
}
