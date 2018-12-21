<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeproductModel extends Model
{
    protected $table = 'typeproduct';
    protected $filltable = [
        'id',
        'ten',
        'moTa',
    ];
}
