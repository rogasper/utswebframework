<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProducts extends Migration
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
            'tipe_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'deskripsi_produk' => [
                'type' => 'TEXT'
            ],
            'fitur_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '255'
            ],
            'foto_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
