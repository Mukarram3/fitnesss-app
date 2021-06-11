<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weekmealcat extends Model
{
    use HasFactory;
    protected $table='weekmealcats';
    protected $fillable=['id','mealcatplanid','weeknumber','daynumber','status'];
}
