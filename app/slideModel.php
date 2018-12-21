<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slideModel extends Model
{
    protected $table = 'slide';
    protected $filltable = [
        'id',
        'tieuDe1',
        'tieuDe2',
        'tieuDe3',
        'buttonText',
        'buttonLink',
        'linkAnh'
    ];
}
