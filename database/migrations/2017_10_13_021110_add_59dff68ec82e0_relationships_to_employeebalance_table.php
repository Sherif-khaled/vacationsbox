<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dff68ec82e0RelationshipsToEmployeeBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_balances', function(Blueprint $table) {
            if (!Schema::hasColumn('employee_balances', 'employee_code_id')) {
                $table->integer('employee_code_id')->unsigned()->nullable();
                $table->foreign('employee_code_id', '81371_59dff68dda95c')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('employee_balances', function(Blueprint $table) {
            
        });
    }
}
