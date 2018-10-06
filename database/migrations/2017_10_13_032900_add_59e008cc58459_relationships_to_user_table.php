<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e008cc58459RelationshipsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->integer('role_id')->unsigned()->nullable();
                $table->foreign('role_id', '81359_59dfe59b18c59')->references('id')->on('roles')->onDelete('cascade');
                }
                if (!Schema::hasColumn('users', 'department_id')) {
                $table->integer('department_id')->unsigned()->nullable();
                $table->foreign('department_id', '81359_59dfeddfb6428')->references('id')->on('departments')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            
        });
    }
}
