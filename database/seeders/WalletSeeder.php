<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('Wallet')->insert([
                'seller_code' => 1,
                'client_code' => 5
            ]);

            DB::table('Wallet')->insert([
                'seller_code' => 1,
                'client_code' => 4
            ]);

            DB::table('Wallet')->insert([
                'seller_code' => 2,
                'client_code' => 2
            ]);

            DB::table('Wallet')->insert([
                'seller_code' => 2,
                'client_code' => 3
            ]);

            DB::table('Wallet')->insert([
                'seller_code' => 2,
                'client_code' => 1
            ]);
        }
    }
}
