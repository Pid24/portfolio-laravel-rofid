<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "titre"=>"Get in touch",
                "description"=>"voici mon formulaire de contact, dans lequel vous pourrez m'envoyer vos coordonnés àfin que je puisse rentrer en contacte avec vous.",
                "adresse"=>"Rue de laeken 12 1000 Bruxelles",
                "telephone"=>486423129,
                "email"=>"kanengelephilippe@gmail.com",

            ],
        ]);
    }
}
