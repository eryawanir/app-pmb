<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 50,
				'unsigned' => true,
				'auto_increment' => true
			],
			'role' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('roles');
	}

	public function down()
	{
		$this->forge->dropTable('roles');
	}
}
