<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountModel extends Model
{
    protected $table = 'account';
    protected $filltable = [
        'id',
        'username',
        'password'
    ];
}
