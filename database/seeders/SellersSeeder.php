<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('Sellers')->insert([
                'full_name' => 'Carlos Joaquim Nascimento',
                'short_name' => 'Carlos Nascimento',
                'date_of_hire' => '1997-10-03'
            ]);

            DB::table('Sellers')->insert([
                'full_name' => 'Amanda Novaes Rafael Camargo',
                'short_name' => 'Carlos Nascimento',
                'date_of_hire' => '2004-07-13'
            ]);

            DB::table('Sellers')->insert([
                'full_name' => 'Paulo Gabriel Soares Martins',
                'short_name' => 'Paulo Martins',
                'date_of_hire' => '2022-03-20'
            ]);

            DB::table('Sellers')->insert([
                'full_name' => 'Daniel Silva Gonzales',
                'short_name' => 'Daniel Gonzales',
                'date_of_hire' => '2004-10-28'
            ]);

            DB::table('Sellers')->insert([
                'full_name' => 'Abrão Fernando da Silva',
                'short_name' => 'Abrão Silva',
                'date_of_hire' => '2003-07-29'
            ]);
        }
    }
}
