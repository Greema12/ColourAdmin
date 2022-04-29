<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    //


     protected $table = 'logo_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
