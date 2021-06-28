<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weekmealcat extends Model
{
    use HasFactory;
    protected $table='weekmealcats';
    protected $fillable=['id','mealcatid','mealcatplanid','weeknumber','daynumber','status'];

    public function hasmealcategory(){

        return $this->belongsTo(Mealcategory::class,'mealcatid');

    }
    public function hasmealcategoryplans(){

        return $this->belongsTo(mealcatplan::class,'mealcatplanid');

    }

    public function hasdaysmealcategories(){

        return $this->hasMany(day::class,'id');

    }


}
