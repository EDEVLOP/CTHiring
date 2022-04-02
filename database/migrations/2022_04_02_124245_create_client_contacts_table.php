<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_name')->nullable();
            $table->integer('client_id');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('password')->nullable();
            $table->string('door_no')->nullable();
            $table->string('street_name')->nullable();
            $table->string('pincode');
            $table->string('area_name')->nullable();
            $table->timestamp('approve_date', 4)->nullable();
            $table->string('remarks')->nullable();
            $table->string('address')->nullable();
            $table->string('is_inactive')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N']);
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->string('city_id', 4)->nullable();
            $table->string('state_id', 4)->nullable();
            $table->string('district_id', 4)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_contacts');
    }
}
