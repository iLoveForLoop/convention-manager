<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Convention;

class Participation extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipationFactory> */
    use HasFactory;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function convention(){
        return $this->belongsTo(Convention::class);
    }
}
