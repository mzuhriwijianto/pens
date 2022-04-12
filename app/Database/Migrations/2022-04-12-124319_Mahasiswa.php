<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nim'       => [
				'type'           => 'int',
				'constraint'     => '10'
			],
			'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'kelas' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'jurusan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);

        $this->forge->addKey('id', TRUE);

		$this->forge->createTable('mahasiswas', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswas');
    }
}
