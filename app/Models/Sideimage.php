<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sideimage extends Model
{
    use HasFactory;
    protected $fillable = ['image_name','theme'];
}
