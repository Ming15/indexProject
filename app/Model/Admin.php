<?php

namespace App\Model;

use \Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable implements JWTSubject
{
    protected $table = 'hf_admin';
    protected $primaryKey = 'admin_id';

    public function getJWTIdentifier()
    {
        return $this->getKey();
        // TODO: Implement getJWTIdentifier() method.
    }

    public function getJWTCustomClaims()
    {
        return ['role' => 'admin'];
        // TODO: Implement getJWTCustomClaims() method.
    }
}
