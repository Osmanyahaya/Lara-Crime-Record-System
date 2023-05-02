<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('diary_of_action');
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('complainant_name');
            $table->string('complainant_tel');
            $table->string('complainant_occupation');
            $table->string('region');
            $table->string('district');
            $table->string('address');
            $table->string('reference')->unique();
            $table->string('location');
            $table->string('dig_address')->nullable();
            $table->string('email')->nullable();
            $table->string('complainant_age');
            $table->string('complainant_gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_tables');
    }
}
