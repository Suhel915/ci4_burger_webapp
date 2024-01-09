<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddButtonColumnsToContentsTable extends Migration
{
    public function up()
    {
        $fields = [
            'blue_button_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100, 
                'null' => true,
            ],
            'blue_button_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255, 
                'null' => true,
            ],
            'red_button_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100, 
                'null' => true,
            ],
            'red_button_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255, 
                'null' => true,
            ],
        ];

        $this->forge->addColumn('contents', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('contents', ['blue_button_name', 'blue_button_url', 'red_button_name', 'red_button_url']);
    }
}
