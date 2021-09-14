<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Informasi extends Migration
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
			'tgl_buka' => [
				'type' => 'DATE'
			],
			'tgl_tutup' => [
				'type' => 'DATE'
			],
			'tgl_pengumuman' => [
				'type' => 'DATE	'
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('informasi');
	}

	public function down()
	{
		$this->forge->dropTable('informasi');
	}
}
