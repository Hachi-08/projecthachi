<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\users;

class users_seeder extends Seeder
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
                'users_name' => 'admin',
                'password'=> '1234',
                'name'=> 'admin',
                'surname'=> '',
                'house_registration'=> '0',
                'phone'=> 'XXX-XXX-XXXXX',
                'level_id'=> '1'
            ],
            [
                'users_name' => 'admin1',
                'password'=> '12345678',
                'name'=> 'ศักดิ์ดา',
                'surname'=> 'โพธิ์อ่อง',
                'house_registration'=> '1/1',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '1'
            ],
            [
                'users_name' => 'admin2',
                'password'=> '12345678',
                'name'=> 'จิรวัฒน์',
                'surname'=> 'เปี่ยมจิรกิตติ์',
                'house_registration'=> '1/2',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '1'
            ],
            [
                'users_name' => 'offieer',
                'password'=> '1234',
                'name'=> 'offieer',
                'surname'=> '',
                'house_registration'=> '2',
                'phone'=> 'XXX-XXX-XXXXX',
                'level_id'=> '2'
            ],
            [
                'users_name' => 'offieer1',
                'password'=> '12345678',
                'name'=> 'วินัย',
                'surname'=> 'ธิโนชัย',
                'house_registration'=> '2/1',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '2'
            ],
            [
                'users_name' => 'offieer2',
                'password'=> '12345678',
                'name'=> 'วิษณุ',
                'surname'=> 'ณ. ศรีสเกษ',
                'house_registration'=> '2/2',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '2'
            ],
            [
                'users_name' => 'user',
                'password'=> '1234',
                'name'=> 'user',
                'surname'=> '',
                'house_registration'=> 'บ้านที่ 0',
                'phone'=> 'XXX-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user1',
                'password'=> '12345678',
                'name'=> 'ภัคพงษ์',
                'surname'=> 'ธัญญะ',
                'house_registration'=> 'บ้านที่ 1',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user2',
                'password'=> '12345678',
                'name'=> 'ณัฐวัฒน์',
                'surname'=> 'เกษร',
                'house_registration'=> 'บ้านที่ 2',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user3',
                'password'=> '12345678',
                'name'=> 'ทักษ์ดนัย',
                'surname'=> 'บุญชู',
                'house_registration'=> 'บ้านที่ 3',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user4',
                'password'=> '12345678',
                'name'=> 'รัตนชัย',
                'surname'=> 'ปิ่นสมบูรณ์',
                'house_registration'=> 'บ้านที่ 4',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user5',
                'password'=> '12345678',
                'name'=> 'มนัสนันท์',
                'surname'=> 'เที่ยงธรรม',
                'house_registration'=> 'บ้านที่ 5',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
            [
                'users_name' => 'user6',
                'password'=> '12345678',
                'name'=> 'วิลาวัณย์',
                'surname'=> 'เสมะฉิม',
                'house_registration'=> 'บ้านที่ 6',
                'phone'=> '09X-XXX-XXXXX',
                'level_id'=> '3'
            ],
        ];

        foreach($data as $key => $value){ //เพิ่มข้อมูลลงในmember
            users::create($value);
        }
    }
}
