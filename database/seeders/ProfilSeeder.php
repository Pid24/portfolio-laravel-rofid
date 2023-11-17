<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert([
            [
                "nom"=>"kanengele",
                "prenom"=>"philippe",
                "age"=> 26,
                "titre"=>"full stack developpeur",
                "email"=>"kanengelephilippe@gmail.com",
                "telephone"=>486423129,

                "created_at"=>now()


            ],
        ]);
    }
}
