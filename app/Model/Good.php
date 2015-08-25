<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //每个商品都属于某一个品牌
    public function brand()
    {
        return $this->belongsTo('App\Model\Brand');
    }
}
