<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 12,
                'unsigned'          => true,
                'auto_increment'    => true,
                'null'              => false,
            ],
            'username' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120',
                'null'              => false,
            ],
            'password' => [
                'type'              => 'VARCHAR',
                'constraint'        => '60',
                'null'              => false,
            ],
            'group' => [
                'type'              => 'INT',
                'constraint'        => '12',
                'unsigned'          => true,
                'null'              => false,
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => false,
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('group', 'groups', 'id_group', 'CASCADE', 'CASCADE');
        $this->forge->createTable('users');
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->forge->dropTable('users');
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }
}
