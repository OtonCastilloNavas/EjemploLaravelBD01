<?php

use Illuminate\Database\Seeder;


class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('personas')->truncate();
        
        
        DB::table('personas')->insert(
            ["nombre"=>"Oton","apellido"=>"castillo"]
        );

        DB::table('personas')->insert(    
        ["nombre"=>"Alvaro","apellido"=>"Altamirano","created_at"=>new DateTime,"updated_at"=>new DateTime]);
        
        DB::table('personas')->insert(
            [["nombre"=>"Johanna","apellido"=>"Hernandez"],    
        ["nombre"=>"David","apellido"=>"Maradiaga"]]
        );
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
