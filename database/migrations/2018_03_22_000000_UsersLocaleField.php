<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersLocaleField extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('locale', 10)->default('ru')->after('status');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('locale');
        });
    }
}
