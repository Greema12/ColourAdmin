<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table = 'product_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
