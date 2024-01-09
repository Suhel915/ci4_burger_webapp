<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSlugToPages extends Migration
{
    public function up()
    {
       
            $fields = [
                'slug' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'unique' => true,
                ],
            ];
    
            $this->forge->addColumn('pages', $fields); 
    }

    public function down()
    {
        $this->forge->dropColumn('pages', 'slug');
    }
}