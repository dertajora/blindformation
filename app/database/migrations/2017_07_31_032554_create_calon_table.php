<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		// Please use mysql file attached in repository insted of this migration, because this application will load some data from this table and you need to fill this table. I have add all candidates data in that mysql file
		Schema::create('calon', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kota');
            $table->string('nama');
            $table->text('profil');
            $table->text('visi');
            $table->text('misi');
            $table->integer('tipe_daerah');
            $table->integer('no_urut');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calon');
	}

}
