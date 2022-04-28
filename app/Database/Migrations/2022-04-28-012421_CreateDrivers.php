<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDrivers extends Migration
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
            'tipe_driver' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'nama_driver' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'informasi_tambahan' => [
                'type' => 'TEXT'
            ],
            'versi_driver' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'link_download' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('drivers');
    }

    public function down()
    {
        $this->forge->dropTable('drivers');
    }
}
