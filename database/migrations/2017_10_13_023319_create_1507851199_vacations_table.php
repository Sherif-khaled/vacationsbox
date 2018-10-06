<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507851199VacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('vacations')) {
            Schema::create('vacations', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_code')->nullable();
                $table->date('request_date')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->integer('count_days')->nullable();
                
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
        Schema::dropIfExists('vacations');
    }
}
