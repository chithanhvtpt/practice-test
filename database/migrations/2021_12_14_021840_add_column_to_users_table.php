<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->addColumn("BigInteger", "category_id")->after("id")->nullable();
            $table->addColumn("text", "sex")->after("name")->nullable();
            $table->addColumn("BigInteger", "phone")->after("sex");
            $table->addColumn("BigInteger", "cmnd")->after("phone");
            $table->addColumn("text", "address")->after("email")->nullable();
            $table->addColumn("date", "birthday")->after("name");
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
            //
        });
    }
}
