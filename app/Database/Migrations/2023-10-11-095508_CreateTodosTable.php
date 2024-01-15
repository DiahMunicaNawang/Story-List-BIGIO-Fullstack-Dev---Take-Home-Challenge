<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'todo' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'deadline' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'type' => 'BOOLEAN',
                'default' => false
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('todos');
    }

    public function down()
    {
        $this->forge->dropTable('todos');
    }
}
