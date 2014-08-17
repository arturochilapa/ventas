<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->string('password', 60)->after('alias');
            $table->enum('status', array('active', 'inactive'))->afeter('sex');
            $table->string('lang', 60)->after('status')->default('en');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
		    $table->dropColumn('password');
            $table->dropColumn('status');
            $table->dropColumn('lang');
            
		});
	}

}
