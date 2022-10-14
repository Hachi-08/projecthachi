<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\accession;


class users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = "users_id";


    protected $fillable = [
        'users_id',
        'users_name',
        'password',
        'name',
        'surname',
        'house_registration',
        'phone',
        'level_id'
    ];


    public function level_name()
    {
        $level_id = $this->level_id;
        $accession = accession::where('level_id', $level_id)->first();
        if (!empty($accession)) {
                $level_name = $accession->level_name;
        }
        return $level_name;
    }
}
