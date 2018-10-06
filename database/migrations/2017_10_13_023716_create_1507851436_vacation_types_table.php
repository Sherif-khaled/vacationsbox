<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507851436VacationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('vacation_types')) {
            Schema::create('vacation_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->tinyInteger('inactive')->nullable()->default(0);
                
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
        Schema::dropIfExists('vacation_types');
    }
}
