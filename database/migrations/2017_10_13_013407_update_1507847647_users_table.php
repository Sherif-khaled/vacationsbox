<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507847647UsersTable extends Migration
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
            
if (!Schema::hasColumn('users', 'job_title')) {
                $table->string('job_title');
                }
if (!Schema::hasColumn('users', 'gender')) {
                $table->enum('gender', array('Male', 'Female'));
                }
if (!Schema::hasColumn('users', 'dateofbirth')) {
                $table->date('dateofbirth')->nullable();
                }
if (!Schema::hasColumn('users', 'user_status')) {
                $table->enum('user_status', array('Active', 'Inactive'));
                }
if (!Schema::hasColumn('users', 'profile_picture')) {
                $table->string('profile_picture');
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
            $table->dropColumn('job_title');
            $table->dropColumn('gender');
            $table->dropColumn('dateofbirth');
            $table->dropColumn('user_status');
            $table->dropColumn('profile_picture');
            
        });
Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
