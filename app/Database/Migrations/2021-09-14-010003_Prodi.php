<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'fakultas_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'nama_prodi' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('fakultas_id', 'fakultas', 'id');
		$this->forge->createTable('prodi');
	}

	public function down()
	{
		$this->forge->dropTable('prodi');
	}
}
