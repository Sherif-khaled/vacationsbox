<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e00a033f3d5RelationshipsToVacationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacations', function(Blueprint $table) {
            if (!Schema::hasColumn('vacations', 'vacation_type_id')) {
                $table->integer('vacation_type_id')->unsigned()->nullable();
                $table->foreign('vacation_type_id', '81372_59dffcf764312')->references('id')->on('vacation_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('vacations', 'employee_alternative_id')) {
                $table->integer('employee_alternative_id')->unsigned()->nullable();
                $table->foreign('employee_alternative_id', '81372_59dfff8e2e21d')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('vacations', function(Blueprint $table) {
            
        });
    }
}
