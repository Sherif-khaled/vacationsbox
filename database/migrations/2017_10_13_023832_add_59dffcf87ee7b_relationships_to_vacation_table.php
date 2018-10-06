<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dffcf87ee7bRelationshipsToVacationTable extends Migration
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
