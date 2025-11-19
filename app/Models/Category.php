<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'image', 'title', 'en_title', 'cn_title', 'description', 'en_description', 'cn_description', 'sort_order', 'slug'];

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Field for created time
    protected $updatedField  = 'updated_at'; // Field for updated time
}