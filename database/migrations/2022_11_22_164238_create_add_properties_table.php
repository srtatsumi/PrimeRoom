<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_properties', function (Blueprint $table) {
            $table->id();
            $table->string('propertyTitle');
            $table->string('propertyDescription');
            $table->string('propertyImage');
            $table->string('propertyVideo');
            $table->string('number');
            $table->string('text');
            // $table->string('text');
            $table->string('adType');
            $table->string('propertyType');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('kitchen');
            $table->string('reception');
            $table->string('roomToRent');
            $table->string('room');
            $table->string('extras');
            $table->string('services');
            $table->string('rent');
            $table->string('billInclude');
            $table->string('availability');
            $table->string('minLength');
            $table->string('maxLength');
            $table->string('currentHousehold');
            $table->string('avgAge');
            $table->string('housemateGender');
            $table->string('occupation');
            $table->string('ethinicity');
            $table->string('prefferedHousemateAge');
            $table->string('prefferedHousemateGender');
            $table->string('group');
            $table->string('advertiser');
            $table->string('advertisementPlan');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('add_properties');
    }
}
