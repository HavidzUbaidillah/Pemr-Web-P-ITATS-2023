<?php

namespace Database\Seeders;

use App\Models\SekretarisModel;
use Illuminate\Database\Seeder;

class SekretarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
//    use WithoutModelEvents;

    public final function run(): void
    {
        SekretarisModel::create([
            'nama_sekretaris' => 'Noa', 'password_sekretaris' => bcrypt('Orang')
        ]);
        SekretarisModel::create([
            'nama_sekretaris' => 'Rio', 'password_sekretaris' => bcrypt('Belut')
        ]);
        SekretarisModel::create([
            'nama_sekretaris' => 'Yuuka', 'password_sekretaris' => bcrypt('Gomen')
        ]);
    }
}
