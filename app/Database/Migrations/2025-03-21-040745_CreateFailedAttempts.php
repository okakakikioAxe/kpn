<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFailedAttempts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'ip_address' => ['type' => 'VARCHAR', 'constraint' => 45, 'unique' => true],
            'attempts'   => ['type' => 'INT', 'default' => 0],
            'blocked_at' => ['type' => 'DATETIME', 'null' => true], // Store block time
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('failed_attempts');
    }

    public function down()
    {
        $this->forge->dropTable('failed_attempts');
    }
}
