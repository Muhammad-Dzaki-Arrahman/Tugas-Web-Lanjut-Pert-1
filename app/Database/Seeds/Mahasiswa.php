<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm'           => '2017051073',
                'nama'          => 'Muhammad Dzaki Arrahman',
                'alamat'        => 'BandarLampung',
                'create_at'     => Time::now(),
             //   'updated_at'     => Time::now(),
            ],
            [
                'npm'           => '2017051059',
                'nama'          => 'Rendy Lutfi Prabowo',
                'alamat'        => 'Palembang',
                'create_at'     => Time::now(),
             //   'updated_at'     => Time::now(),
            ],
                        [
                'npm'           => '2017051074',
                'nama'          => 'Dwi Kurniawan',
                'alamat'        => 'BandarLampung',
                'create_at'     => Time::now(),
             //   'updated_at'     => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data){
            $this->db->table('mhs')->insert($data);
        }
    }
}
