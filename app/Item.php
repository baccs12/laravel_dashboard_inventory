<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
    protected $table = 'item';

    public $timestamps = false;

    protected $fillable = [
        'item_name',
        'type',
        'item_onhand',
        'supplier_name',
        'item_image'
    ];
}
