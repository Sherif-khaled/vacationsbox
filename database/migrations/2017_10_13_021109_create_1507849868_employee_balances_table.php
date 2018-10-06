<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507849868EmployeeBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('employee_balances')) {
            Schema::create('employee_balances', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('yearly_balance')->nullable();
                $table->integer('casual_balance')->nullable();
                $table->integer('exhausted_annually')->nullable();
                $table->integer('exhausted_casual')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_balances');
    }
}
