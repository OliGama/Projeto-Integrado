<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoras')->insert([
            'nome'=> Str::random(10),
            'local'=>Str::random(10). '- SP',
            'site'=>Str::random(10). '.com.br',
        ]);
    }
}
