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
            $table->string('propertyTitle')->nullable();
            $table->string('propertyDescription')->nullable();
            $table->string('propertyImage')->nullable();
            $table->string('propertyVideo');
            $table->string('number')->nullable();
            $table->string('text')->nullable();

            $table->string('postcode')->nullable();
            $table->string('road')->nullable();
            $table->string('city')->nullable();


            
            // $table->string('text');
            $table->string('adType')->nullable();
            $table->string('propertyType')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('reception')->nullable();
            $table->string('roomToRent')->nullable();
            $table->string('rentAmount')->nullable();

            $table->string('room')->nullable();
            $table->string('extras')->nullable();
            $table->string('services')->nullable();
            $table->string('rent')->nullable();
            $table->string('billInclude')->nullable();
            $table->string('availability')->nullable();
            $table->string('minLength')->nullable();
            $table->string('maxLength')->nullable();
            $table->string('currentHousehold')->nullable();
            $table->string('avgAge')->nullable();
            $table->string('housemateGender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('ethinicity')->nullable();
            $table->string('prefferedHousemateAge')->nullable();
            $table->string('prefferedHousemateGender');
            $table->string('group')->nullable();
            $table->string('advertiser')->nullable();
            $table->string('advertisementPlan')->nullable();
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
