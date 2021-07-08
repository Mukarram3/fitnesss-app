<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealcatplan extends Model
{
    use HasFactory;
    protected $table='mealcatplans';
    protected $fillable = ['id','mealcat_id','price','duration','description','status'];

    public function hasmealcatweek(){

        return $this->hasMany(mealcatweek::class,'id');

    }

    public function hasmealcategories(){

        return $this->belongsTo(Mealcategory::class,'mealcat_id');

    }

}
