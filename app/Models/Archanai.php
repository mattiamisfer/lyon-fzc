<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archanai extends Model
{
    use HasFactory;
    protected $fillable= ['title','url','image','category_id','sort_order','status'];

}
