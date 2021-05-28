<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    protected $table = 'hf_users';

    protected $primaryKey = 'user_id';

    // 获取会储存到 jwt 声明中的标识
    public function getJWTIdentifier()
    {
        return $this->getKey();
        // TODO: Implement getJWTIdentifier() method.

    }

    // 返回包含要添加到 jwt 声明中的自定义键值对数组
    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return ['role' => 'user'];
    }
}
