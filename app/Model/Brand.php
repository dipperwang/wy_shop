<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //一个品牌有多个商品
    public function goods()
    {
        return $this->hasMany('App\Model\Good');
    }
}
