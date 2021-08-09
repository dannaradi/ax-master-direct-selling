<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_model extends Model
{
    protected $table = 'INVENTTABLE';
    protected $primaryKey = 'ITEMID';
    public $timestamps = false;
}
