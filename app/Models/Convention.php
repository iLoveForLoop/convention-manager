<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Participation;

class Convention extends Model
{
    /** @use HasFactory<\Database\Factories\ConventionFactory> */
    use HasFactory;

    protected $guarded = [];

    public function participations(){
        return $this->hasMany(Participation::class);
    }
}
