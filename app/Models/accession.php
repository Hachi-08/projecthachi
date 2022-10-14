<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class accession extends Model
{
    use HasFactory;
    protected $primaryKey = "level_id";


    protected $fillable = [
        'level_id',
        'level_name',
    ];

}
