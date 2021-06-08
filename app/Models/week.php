<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class week extends Model
{
    use HasFactory;
    protected $table='weeks';
    protected $fillable=['id','daynumber','title','duration','cardio','strength','stretch']
}
