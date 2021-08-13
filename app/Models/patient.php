<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table='patients';
    protected $fillable=['name','email','password','address','phone','gender','dob','status'];
}
