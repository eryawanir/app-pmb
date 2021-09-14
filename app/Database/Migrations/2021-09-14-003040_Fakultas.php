<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fakultas extends Migration
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
			'nama_fakultas' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('fakultas');
	}

	public function down()
	{
		$this->forge->dropTable('fakultas');
	}
}
