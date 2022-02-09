<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','slug','price','sort_order','status','validation'];


    public function checkout()
    {
        return $this->hasOne(Checkout::class);
    }
}
