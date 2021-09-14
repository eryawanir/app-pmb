<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftaran extends Migration
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
			'user_id' => [
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => true,
			],
			'fakultas_id' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'prodi_id' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'nomor_pendaftaran' => [
				'type' => 'INT',
				'constraint' => '11'
			],
			'nama_peserta' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'tempat_lahir' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'tanggal_lahir' => [
				'type' => 'DATE'
			],
			'jenis_kelamin' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'agama' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'no_hp' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'alamat_peserta' => [
				'type' => 'TEXT'
			],
			'nama_orangtua' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'pekerjaan_orangtua' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'no_hp_orangtua' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'nama_sekolah' => [
				'type' => 'VARCHAR',
				'constraint' => 256
			],
			'tahun_lulus' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'alamat_sekolah' => [
				'type' => 'TEXT'
			],
			'foto' => [
				'type' => 'TEXT'
			],
			'berkas' => [
				'type' => 'TEXT'
			],
			'tahap_satu' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'tahap_dua' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'tahap_tiga' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'tanggal_pendaftaran' => [
				'type' => 'DATE'
			],
			'status_pendaftaran' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'created_at' => [
				'type' => 'DATETIME'
			],
			'updated_at' => [
				'type' => 'DATETIME'
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('pendaftaran');
	}

	public function down()
	{
		$this->forge->dropTable('pendaftaran');
	}
}
