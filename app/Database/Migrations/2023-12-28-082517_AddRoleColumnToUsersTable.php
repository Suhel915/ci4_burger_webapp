<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoleColumnToUsersTable extends Migration
{
    public function up()
    {
        $fields = [
            'role' => [
                'type' => 'ENUM("Admin", "User")',
                'default' => 'User',
                'null' => false
            ]
        ];

        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'role');
    }
}
