<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductVariant extends Model
{
    protected $table            = 'product_variants';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['product_id', 'image', 'title', 'order', 'color'];

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Field for created time
    protected $updatedField  = 'updated_at'; // Field for updated time
}
