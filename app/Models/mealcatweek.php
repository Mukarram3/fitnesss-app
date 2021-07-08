<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealcatweek extends Model
{
    use HasFactory;

    protected $table='mealcatweeks';
    protected $fillable=['id','mealcatid','mealcatplanid','weeknumber','status'];

    public function hasmealcategory(){

        return $this->belongsTo(Mealcategory::class,'mealcatid');

    }
    public function hasmealcatplans(){

        return $this->belongsTo(mealcatplan::class,'mealcatplanid');

    }

    public function hasmealday(){

        return $this->hasMany(mealday::class,'id');

    }
}


