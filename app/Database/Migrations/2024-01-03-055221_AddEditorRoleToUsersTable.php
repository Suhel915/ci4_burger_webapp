<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEditorRoleToUsersTable extends Migration
{
    public function up()
    {
        $fields = [
            'role' => [
                'type' => 'ENUM("Admin", "User", "Editor")',
                'default' => 'User',
                'null' => false
            ]
        ];

        $this->forge->modifyColumn('users', $fields);
    }

    public function down()
    {
        
    }
}
