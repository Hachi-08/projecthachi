<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_registration extends Model
{
    use HasFactory;
    protected $primaryKey = "car_registration_id";

    protected $fillable = [
        'car_registration_id',
        'users_id',
        'QRcode',
        'car_registration_name',
        'car_type'
    ];

    // public function users()
    // {
    //     $house_registration = $this->house_registration;
    //     $users = users::where('house_registration', $house_registration)->first();
    //     if (!empty($house_registration)) {
    //             $house_registration = $house_registration->house_registration;
    //     }
    //     return $house_registration;
    // }
}
