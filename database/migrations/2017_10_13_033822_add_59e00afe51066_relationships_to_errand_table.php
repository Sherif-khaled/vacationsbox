<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e00afe51066RelationshipsToErrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('errands', function(Blueprint $table) {
            if (!Schema::hasColumn('errands', 'employee_alternative_id')) {
                $table->integer('employee_alternative_id')->unsigned()->nullable();
                $table->foreign('employee_alternative_id', '81386_59e00466608e1')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('errands', function(Blueprint $table) {
            
        });
    }
}
