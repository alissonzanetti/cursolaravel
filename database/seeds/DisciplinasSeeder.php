<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('disciplinas')
      ->insert([
        [
          'nome'=>'História'
        ],
        [
          'nome'=>'Português'
        ],
      ]
    );
    }
}
