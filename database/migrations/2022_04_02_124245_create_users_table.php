<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('temp_password')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('signature')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->nullable()->default('N');
            $table->string('level_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('images')->nullable();
            $table->timestamp('modified_at')->nullable()->useCurrent();
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('deleted_by')->nullable();
            $table->tinyInteger('location_id')->nullable();
            $table->tinyInteger('role_id')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
