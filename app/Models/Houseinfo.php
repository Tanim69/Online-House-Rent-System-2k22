<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houseinfo extends Model
{
    use HasFactory;
     //protected $fillable=[ 'house_id' ,'house_name' , 'house_address','tolet_date','house_description','floor_description','flat_description','flat_price',]

    protected $guarded=[];
    // protected $table='houseinfos';
}
