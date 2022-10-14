<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\accession;

class accessions_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'level_name' => 'ผู้ดูแลระบบ'
            ],
            [
                'level_name' => 'เจ้าหน้าที่รักษาความปลอดภัย'
            ],
            [
                'level_name' => 'ลูกบ้าน'
            ]
        ];

        foreach($data as $key => $value){
            accession::create($value);
        }
    }
}
