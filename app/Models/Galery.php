<?php

namespace App\Models;

use CodeIgniter\Model;

class Galery extends Model
{
    protected $table            = 'galery';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['image', 'image_alt', 'thumbnail', 'title', 'description', 'type', 'status'];
}
