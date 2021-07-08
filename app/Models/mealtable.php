<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealtable extends Model
{
    use HasFactory;
    protected $table='mealtables';
    protected $fillable = ['id','mealcatid','mealcatplanid','mealcatweekid','mealdayid','title','image','mealtime','ingredients','steps','calories','caloriesperc','carbo','carboperc','proteins','proteinsperc','fats','fatsperc','complexity','duration','description','status'];
    public function hasMealcategory(){

        return $this->belongsTo(Mealcategory::class,'mealcatid');

    }
    public function hasingredients(){

        return $this->hasMany(Ingredient::class,'id');

    }
    public function hassteps(){

        return $this->hasMany(step::class,'id');

    }
    public function hassubscribed(){

        return $this->belongsTo(subscribed::class,'mealcatid');

    }
    public function hasday(){

        return $this->belongsTo(mealday::class,'mealdayid');

    }
}
