<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription_history extends Model
{
    use HasFactory;
    protected $table='subscription_histories';
    protected $fillable = ['id','user_id','cat_id','description','status'];
}
