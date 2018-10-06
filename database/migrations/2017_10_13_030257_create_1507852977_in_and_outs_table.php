<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507852977InAndOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('in_and_outs')) {
            Schema::create('in_and_outs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_code')->nullable();
                $table->enum('in_out_type', array('Late Attendance', 'Early departure'))->nullable();
                $table->date('request_date')->nullable();
                $table->date('day')->nullable();
                $table->time('time')->nullable();
                $table->time('time_period')->nullable();
                $table->text('reason')->nullable();
                
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
        Schema::dropIfExists('in_and_outs');
    }
}
