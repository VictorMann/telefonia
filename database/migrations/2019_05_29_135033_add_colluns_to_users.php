<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCollunsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->after('remember_token');
            $table->string('active')->after('role');
            $table->string('status')->after('active');
            $table->string('profile')->after('active');
            $table->integer('perfil_id')->after('profile');
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
            $table->dropColumn('role');
            $table->dropColumn('active');
            $table->dropColumn('profile');
            $table->dropColumn('status');
            $table->dropColumn('perfil_id');
        });
    }
}
