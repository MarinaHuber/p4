<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoundsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sounds', function($table) {

       	$table->increments('id');
       	$table->timestamps();

        // The rest of the fields...
        $table->string('title');
        $table->string('author');
        $table->integer('published');
        $table->string('cover');
      
      });


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sounds');
	}

}
