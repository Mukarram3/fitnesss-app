<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $table='meals';

    // protected $primaryKey = 'title';
    protected $fillable = ['id','meal_catid ','title','image','duration','description','status'];
    public function hasMealcategory(){

        return $this->belongsTo(Mealcategory::class,'meal_catid');

    }
    public function hasingredients(){

        return $this->hasMany(Ingredient::class,'id');

    }
    public function hassteps(){

        return $this->hasMany(step::class,'id');

    }
    public function hassubscribed(){

        return $this->belongsTo(subscribed::class,'meal_catid');

    }
}
