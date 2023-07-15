<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('NID');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('email');
            $table->string('gender',10);
            $table->string('BloodGroup',10);
            $table->string('address');
            $table->integer('Ward_no');
            $table->string('vaccinate',10);
            $table->string('vaccine_name',30);
            $table->string('prior_diagnosis',10);
            $table->string('status')-> default('পরীক্ষার তারিখ শীঘ্রই বলা হবে');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
