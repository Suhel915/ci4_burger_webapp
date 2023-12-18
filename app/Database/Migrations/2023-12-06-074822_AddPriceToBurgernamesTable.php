<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPriceToBurgernamesTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('burgernames', [
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('burgernames', 'price');
    }
}
