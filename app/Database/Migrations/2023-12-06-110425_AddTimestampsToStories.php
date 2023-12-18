<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToStories extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ];

        $this->forge->addColumn('stories', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('stories', 'created_at');
        $this->forge->dropColumn('stories', 'updated_at');
    }
}
