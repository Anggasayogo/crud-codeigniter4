<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'nama'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'nim' => [
					'type'           => 'VARCHAR',
					'constraint'           => 100,
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'           => 100,
		   ],
		   'jurusan' => [
			'type'           => 'VARCHAR',
			'constraint'           => 100,
	       ],
	    ]);
	    $this->forge->addKey('id', TRUE);
	    $this->forge->createTable('student');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
