<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('mobile')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('barangay');
            $table->string('city');
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('sss')->nullable();
            $table->string('tin')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
}
