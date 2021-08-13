<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorrating extends Model
{
    use HasFactory;
    protected $table= 'doctorratings';
    protected $fillable=['id','doc_id','pat_id','rating','reviews'];
}
