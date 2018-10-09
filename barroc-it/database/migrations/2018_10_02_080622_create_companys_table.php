<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->dateTime('last_contact_date');
            $table->boolean('maintenance_contract');
            $table->dateTime('appointments');
            $table->boolean('open_projects');
            $table->string('address1');
            $table->string('postal_code1');
            $table->string('residence1');
            $table->string('address2');
            $table->string('postal_code2');
            $table->string('residence2');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->string('fax_number');
            $table->string('contact_person');
            $table->string('initials');
            $table->unsignedInteger('project_id');
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
        Schema::dropIfExists('company');
    }
}
