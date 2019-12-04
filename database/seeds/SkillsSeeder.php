<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binaryFile = 'http://localhost/pweb-lauren/public/img/Skills/photography.png';
        DB::table('skills')->insert([
            [
                'icon' => $binaryFile,
                'title' => "PHOTOGRAPHY",
                'content' => "Photography is one of my oldest passions. Even though it is just a hobby, the ability to treat and art direct images has been fundamental to my skills as a Designer."
            ]
        ]);
    }
}
