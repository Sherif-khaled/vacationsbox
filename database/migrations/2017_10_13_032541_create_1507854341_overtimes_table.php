<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507854341OvertimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('overtimes')) {
            Schema::create('overtimes', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_code')->nullable();
                $table->date('overtime_date')->nullable();
                $table->time('time_start')->nullable();
                $table->time('time_end')->nullable();
                $table->time('period')->nullable();
                $table->string('overtime_reason')->nullable();
                
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
        Schema::dropIfExists('overtimes');
    }
}
