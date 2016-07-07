<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Supplier extends Eloquent
{

    protected $table = 'supplier';

    public $timestamps = false;

    protected $fillable = [
        'supplier_name'
    ];
}
