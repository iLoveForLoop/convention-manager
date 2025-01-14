<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Personl_Info extends Model
{
    /** @use HasFactory<\Database\Factories\PersonlInfoFactory> */
    use HasFactory;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
