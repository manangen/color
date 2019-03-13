<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //配置模型关系
    public function userinfo(){
    	return $this->hasOne('App\Models\Usersinfos','uid');
    }
}
