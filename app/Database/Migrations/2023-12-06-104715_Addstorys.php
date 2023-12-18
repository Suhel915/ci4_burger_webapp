<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addstorys extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pname' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('stories');
    }

    public function down()
    {
        $this->forge->dropTable('stories');
    }
}
