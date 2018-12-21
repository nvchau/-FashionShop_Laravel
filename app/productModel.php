<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
//    protected $table = 'product';
//    protected $filltable = [
//        'id',
//        'typeproduct_id',
//        'ten',
//        'gia',
//        'moTa',
//        'linkAnh'
//    ];
    protected $table = "product";

    public function product_type(){return $this->belongsTo('App\TypeProduct','id_type','id');}
    public function bill_detail(){return $this->hasMany('App\BillDetails','id_product','id');}
}
