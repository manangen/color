<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
     public $table = 'goods';

 
          // 属于关系   意思：分类的表和我商品的typeid有关联
          public function cates(){
    	    return $this->belongsTo('App\Models\Cates','typeid');
            }
}
