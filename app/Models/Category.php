<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable= ['id','color','name','icon'];

    public function hasdoctors(){
        return $this->hasMany(doctor::class,'id');
    }
}
