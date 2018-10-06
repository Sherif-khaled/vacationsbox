<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507848830UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(! Schema::hasColumn('users', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'employee_code')) {
                $table->integer('employee_code')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('employee_code');
            
        });
Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
