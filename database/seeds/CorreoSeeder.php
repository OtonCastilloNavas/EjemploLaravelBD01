<?php

use Illuminate\Database\Seeder;

class CorreoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('correo')->truncate();
        DB::table('correo')->insert(
            [["direccion"=>"oton.cn@gmail.com","id_persona"=>"1"],
            ["direccion"=>"oton.castillo@ct.unanleon.edu.ni","id_persona"=>"1"],
            ["direccion"=>"alvaro@ct.unanleon.edu.ni","id_persona"=>"2"],
            ["direccion"=>"johanna@ct.unanleon.edu.ni","id_persona"=>"3"],
            ["direccion"=>"david.maradiaga@ct.unanleon.edu.ni","id_persona"=>"4"]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        //
    }
}
