<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mealcategory extends Model
{
    use HasFactory;
    protected $table='mealcategories';
    protected $fillable = ['id','cat_id','title','image','description','status','paid'];
    public function hasMealtable(){

        return $this->hasMany(mealtable::class,'id');

    }
    public function hasSubscription_plan(){

        return $this->hasMany(subscription_plan::class,'id');

    }
    public function hassubscribed(){

        return $this->hasMany(subscribed::class,'id');

    }

    public function hasmealcatweeks(){

        return $this->hasMany(mealcatweek::class,'id');

    }

    public function hasmealcatplans(){

        return $this->hasMany(mealcatplan::class,'id');

    }

}
