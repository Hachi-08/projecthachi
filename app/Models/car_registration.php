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

    public function getImagePathAttribute(){
        $raw_image = $this->QRcode;
        $image = str_replace('public','',$raw_image);
        return asset('storage'.$image);
    }
}
