<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [ 'id' => 1, 
            'username' => 'username', 
            // 'status' => , 
            // 'status_message', 
            // 'active', 
            // 'last_active', 
            // 'created_at', 
            // 'updated_at', 
            // 'deleted_at'
        ];
     
        $this->db->table('users')->insert($data);
    }
}
