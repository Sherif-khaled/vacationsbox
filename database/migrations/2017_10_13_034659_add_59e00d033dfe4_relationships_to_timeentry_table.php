<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e00d033dfe4RelationshipsToTimeEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_entries', function(Blueprint $table) {
            if (!Schema::hasColumn('time_entries', 'work_type_id')) {
                $table->integer('work_type_id')->unsigned()->nullable();
                $table->foreign('work_type_id', '81398_59e00d022ffbb')->references('id')->on('time_work_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('time_entries', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '81398_59e00d0237a8b')->references('id')->on('time_projects')->onDelete('cascade');
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
        Schema::table('time_entries', function(Blueprint $table) {
            
        });
    }
}
