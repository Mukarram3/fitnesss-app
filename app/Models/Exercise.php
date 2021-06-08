<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table='exercises';
    protected $fillable = ['id','workout_catid','image','video_animat','name','sets','reps','duration','description','status'];
    public function hasWorkout(){

        return $this->belongsTo(Workout::class,'workout_catid');

    }
}
