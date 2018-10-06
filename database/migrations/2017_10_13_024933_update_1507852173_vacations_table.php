<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507852173VacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacations', function (Blueprint $table) {
            
if (!Schema::hasColumn('vacations', 'reason')) {
                $table->text('reason');
                }
if (!Schema::hasColumn('vacations', 'accepted_by_manager')) {
                $table->tinyInteger('accepted_by_manager')->default(0);
                }
if (!Schema::hasColumn('vacations', 'accepted_by_hr')) {
                $table->tinyInteger('accepted_by_hr')->default(0);
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
        Schema::table('vacations', function (Blueprint $table) {
            $table->dropColumn('reason');
            $table->dropColumn('accepted_by_manager');
            $table->dropColumn('accepted_by_hr');
            
        });

    }
}
