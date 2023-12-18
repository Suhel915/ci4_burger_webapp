<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contenttable extends Migration
{
    public function up()
    { $this->forge->addField([
        'content_id' => [
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'heading' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'sub_heading' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'main_content' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'additional_content' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'content_image' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'content_section' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => true,
        ],
        'p_button' => [
            'type' => 'ENUM',
            'constraint' => ['yes', 'no'],
            'default' => 'no',
        ],
        'd_button' => [
            'type' => 'ENUM',
            'constraint' => ['yes', 'no'],
            'default' => 'no',
        ],
        'back_image' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'pages' => [
            'type' => 'INT',
            'constraint' => 5,
            'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'default' => null,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'default' => null,
        ],
    ]);
    $this->forge->addKey('content_id', true);
    $this->forge->createTable('contents');
    }

    public function down()
    {
        $this->forge->dropTable('contents');
    }
}
