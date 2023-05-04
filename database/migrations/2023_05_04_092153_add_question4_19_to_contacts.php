<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestion419ToContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
          $table->string('question3a')->after('question2f')->nullable();
          $table->string('question3b')->after('question3a')->nullable();
          $table->string('question3c')->after('question3b')->nullable();
          $table->string('question3d')->after('question3c')->nullable();
          $table->string('question4')->after('question3d');
          $table->string('question5')->after('question4');
          $table->string('question6')->after('question5');
          $table->string('question7')->after('question6');
          $table->string('question8')->after('question7');
          $table->string('question9')->after('question8');
          $table->string('question10')->after('question9');
          $table->string('question11')->after('question10');
          $table->string('question12')->after('question11');
          $table->string('question13')->after('question12');
          $table->string('question14')->after('question13');
          $table->string('question15')->after('question14');
          $table->string('question16')->after('question15');
          $table->string('question17')->after('question16');
          $table->string('question18')->after('question17');
          $table->string('question19')->after('question18');
          $table->text('comments')->after('question19')->nullable();
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
