<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507853413ErrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('errands')) {
            Schema::create('errands', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_code')->nullable();
                $table->date('request_date')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->datetime('errand_period')->nullable();
                $table->text('errand_reason')->nullable();
                
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
        Schema::dropIfExists('errands');
    }
}
