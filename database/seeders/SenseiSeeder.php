<?php

namespace Database\Seeders;

use App\Models\SenseiModel;
use Illuminate\Database\Seeder;

class SenseiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public final function run(): void
    {
        SenseiModel::create([
            'nama_sensei' => 'Ubedz', 'password_sensei' => bcrypt('Ubedz'), 'kantor_sensei' => 'Schale Office Residence', 'sekretaris_id' => '201'
        ]);
        SenseiModel::create([
            'nama_sensei' => 'BangSat', 'password_sensei' => bcrypt('bgst'), 'kantor_sensei' => 'Schale Office Residence', 'sekretaris_id' => '203'
        ]);
        SenseiModel::create([
            'nama_sensei' => 'Esanime', 'password_sensei' => bcrypt('gresik'), 'kantor_sensei' => 'Millennium Sensei HomeStay', 'sekretaris_id' => '201'
        ]);
        SenseiModel::create([
            'nama_sensei' => 'Shinota', 'password_sensei' => bcrypt('shinotaa'), 'kantor_sensei' => 'Millennium Sensei HomeStay', 'sekretaris_id' => '202'
        ]);
        SenseiModel::create([
            'nama_sensei' => 'Fumino', 'password_sensei' => bcrypt('fuminocchi'), 'kantor_sensei' => 'Schale Office Residence', 'sekretaris_id' => '201'
        ]);
    }
}
