<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('Clients')->insert([
                'cnpj' => '43181961000152',
                'name' => 'Jaskolski-McDermott',
                'foundation_at' => '2021-12-03'
            ]);

            DB::table('Clients')->insert([
                'cnpj' => '44191014000105',
                'name' => 'Kozey-Erdman',
                'foundation_at' => '2021-06-05'
            ]);

            DB::table('Clients')->insert([
                'cnpj' => '81234193000147',
                'name' => 'Toy-Story',
                'foundation_at' => '2021-06-05'
            ]);

            DB::table('Clients')->insert([
                'cnpj' => '63358388000117',
                'name' => 'Auto-Teste',
                'foundation_at' => '2020-06-05'
            ]);

            DB::table('Clients')->insert([
                'cnpj' => '69330173000174',
                'name' => 'Signed-Art',
                'foundation_at' => '2020-06-05'
            ]);
        }
    }
}
