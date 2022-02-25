<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Jorge',
            'edad' =>  '26',
            'sexo' => 'H',
            'rol_id' => 1,
        ]);

        DB::table('users')->insert([
            'nombre' => 'Martin',
            'edad' =>  '33',
            'sexo' => 'H',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Eduardo',
            'edad' =>  '36',
            'sexo' => 'H',
            'rol_id' => 3,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Marcela',
            'edad' =>  '23',
            'sexo' => 'M',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Analia',
            'edad' =>  '22',
            'sexo' => 'M',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Laura',
            'edad' =>  '45',
            'sexo' => 'M',
            'rol_id' => 3,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Adrian',
            'edad' =>  '25',
            'sexo' => 'H',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Liliana',
            'edad' =>  '34',
            'sexo' => 'H',
            'rol_id' => 1,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Horacio',
            'edad' =>  '38',
            'sexo' => 'H',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Pablo',
            'edad' =>  '26',
            'sexo' => 'H',
            'rol_id' => 1,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Mariana',
            'edad' =>  '26',
            'sexo' => 'M',
            'rol_id' => 1,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Susana',
            'edad' =>  '26',
            'sexo' => 'M',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Felipe',
            'edad' =>  '27',
            'sexo' => 'H',
            'rol_id' => 2,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Gabriel',
            'edad' =>  '25',
            'sexo' => 'H',
            'rol_id' => 3,
        ]);
        DB::table('users')->insert([
            'nombre' => 'Ernesto',
            'edad' =>  '22',
            'sexo' => 'H',
            'rol_id' => 1,
        ]);
    }
}
