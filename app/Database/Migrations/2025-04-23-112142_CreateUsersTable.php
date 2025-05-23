<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id'       => ['type' => 'INT', 'auto_increment' => true],
        'name'     => ['type' => 'VARCHAR', 'constraint' => 100],
        'email'    => ['type' => 'VARCHAR', 'constraint' => 100],
        'password' => ['type' => 'VARCHAR', 'constraint' => 255],
        'role'     => ['type' => 'VARCHAR', 'constraint' => 20],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('users');
}

    public function down()
    {
        //
    }
}
