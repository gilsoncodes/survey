<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestion2ToContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('question2f')->after('question1')->nullable();
            $table->string('question2e')->after('question1')->nullable();
            $table->string('question2d')->after('question1')->nullable();
            $table->string('question2c')->after('question1')->nullable();
            $table->string('question2b')->after('question1')->nullable();
            $table->string('question2a')->after('question1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
