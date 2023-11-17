<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
                "language"=>"HTML",
                "pourcentage"=> 90,
                "description"=>"mes skills",
                "created_at"=>now()

            ],

            [
                "language"=>"CSS",
                "pourcentage"=> 90,
                "description"=>"apprentissage css",
                "created_at"=>now()

            ],

            [
                "language"=>"PHP, LARAVEL",
                "pourcentage"=> 50,
                "description"=>"mes skills",
                "created_at"=>now()

            ],

            [
                "language"=>"JAVASCRIPT",
                "pourcentage"=> 90,
                "description"=>"apprentissage JS",
                "created_at"=>now()

            ],

            [
                "language"=>"REACT",
                "pourcentage"=> 80,
                "description"=>"I am a junior web developer actively seeking employment after completing a 6-month training program at a web startup called Molengeek. This experience has granted me autonomy and self-confidence, even though I didn't have a deep foundation initially. I was able to reinforce what I learned during my professional training and expand my skill set.

                Naturally independent, I am capable of working both independently and in a team, adapting to unfamiliar environments. I am proactive when given the freedom to propose ideas, always striving to enhance and optimize projects to meet client demands effectively. Code optimization is one of my priorities.",
                "created_at"=>now()

            ],

        ]);
    }
}
