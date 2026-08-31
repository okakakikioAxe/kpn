<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
<<<<<<< HEAD
    protected $allowedFields    = ['image', 'thumbnail', 'title', 'category', 'description', 'category' , 'meta_title', 'meta_description'];
=======
    protected $allowedFields    = ['image', 'thumbnail', 'title', 'category', 'description', 'category'];
>>>>>>> b3e526899119848feddc0ba1691280352cade722

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Field for created time
    protected $updatedField  = 'updated_at'; // Field for updated time
<<<<<<< HEAD
}
=======
}
>>>>>>> b3e526899119848feddc0ba1691280352cade722
