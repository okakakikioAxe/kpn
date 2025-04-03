<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['image', 'thumbnail', 'title', 'description', 'status'];

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Field for created time
    protected $updatedField  = 'updated_at'; // Field for updated time
}
