<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    use HasFactory;
    protected $table='days';
    protected $fillable = ['id','weekmealcatid ','daynumber','status'];

    public function hasmealcategoryweeks(){

        return $this->belongsTo(weekmealcat::class,'weekmealcatid');

    }

}
