<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealday extends Model
{
    use HasFactory;
    protected $table='mealdays';
    protected $fillable = ['id','mealcatid','mealcatplanid','mealcatweekid','daynumber','status'];

    public function hasmealcategoryweeks(){

        return $this->belongsTo(mealcatweek::class,'mealcatweekid');

    }

    public function hasmeal(){

        return $this->hasMany(mealtable::class,'id');

    }
}

