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
            $table->string('NID_no');
            $table->string('names');
            $table->date('birthdate');
            $table->string('phoneN');
            $table->string('mailaddress');
            $table->string('sex',10);
            $table->string('BloodG',10);
            $table->string('address');
            $table->integer('Wardno');
            $table->string('veksinate',10);
            $table->string('Vname',30);
            $table->string('priordiagnosis',10);
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
