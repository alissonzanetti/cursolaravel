<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')
        ->insert([
          [
            'nome'=>'Videira'
          ],
          [
            'nome'=>'Luzerna'
          ],
        ]
      );
    }
}
