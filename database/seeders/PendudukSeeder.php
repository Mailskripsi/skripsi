<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penduduks')->insert([
            'nik' => '232453648232940356',
            'nama' => 'Rinto Nguku',
            'jeniskelamin' => 'laki',
            'rt' => '009',
            'notelepon' => '087654456890',
            'statuskel' => 'Kepala Keluarga',
        ]);
    }
}
