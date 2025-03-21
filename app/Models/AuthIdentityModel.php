<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthIdentityModel extends Model
{
    protected $table = 'auth_identities';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'type', 'secret', 'secret2', 'expires', 'extra'];
}
