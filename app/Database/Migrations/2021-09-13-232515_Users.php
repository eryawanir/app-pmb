<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => true,
				'auto_increment' => true
			],
			'role_id' => [
				'type' => 'INT',
				'constraint' => 50,
				'unsigned' => true,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
				'unique' => true
			],
			'password' => [
				'type' => 'TEXT'
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'upadated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('role_id', 'roles', 'id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
