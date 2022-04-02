<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->string('mobile');
            $table->string('email', 150)->nullable();
            $table->string('door_no');
            $table->string('street_name');
            $table->string('pincode');
            $table->string('area_name');
            $table->tinyInteger('is_approve')->default(0);
            $table->integer('approved_by')->nullable();
            $table->tinyInteger('approve_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('address')->nullable();
            $table->string('is_inactive')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N']);
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->string('crm_id', 100)->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
