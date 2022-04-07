<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    // protected  $fillable=['name' , 'email', 'address','image',]
    protected $guarded=[];

    protected $table='houses';

}
