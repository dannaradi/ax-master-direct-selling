<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_model extends Model
{
    protected $table = 'CUSTTABLE';
    protected $primaryKey = 'ACCOUNTNUM';
    public $timestamps = false;
}
