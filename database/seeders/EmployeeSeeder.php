<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama'=>'Fadli',
            'jeniskelamin'=>'laki-laki',
            'notelpon'=>'085704543663',
            'alamat'=>'Fadli',
        ]);
    }
}
