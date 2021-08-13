<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table='doctors';
    protected $fillable= ['id','cat_id','name','email','password','address','phone','gender','dob','qualification','experience','fee','status'];
}
