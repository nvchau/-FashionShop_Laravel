<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    protected $table = 'cart';
    protected $filltable = [
        'id',
        'ten',
        'gia',
        'soLuong',
        'tong',
        'linkAnh'
    ];
}
