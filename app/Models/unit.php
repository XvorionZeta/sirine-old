<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = "unit";
    protected $fillable = ['id','id_unit','unit','created_at'];
    use HasFactory;
}
