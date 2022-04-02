<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('position_id_totalopeningclient')->nullable();
            $table->string('client_name')->nullable();
            $table->string('spoc_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_location', 200)->nullable();
            $table->string('job_code', 200)->nullable();
            $table->string('min_experience', 100)->nullable();
            $table->string('max_experience')->nullable();
            $table->string('annual_ctc_min', 100)->nullable();
            $table->string('annual_ctc_max')->nullable();
            $table->string('qualification', 200)->nullable();
            $table->string('functional_area', 200)->nullable();
            $table->string('industry', 200)->nullable();
            $table->string('age_min', 100)->nullable();
            $table->string('age_max')->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('technicalskils', 100)->nullable();
            $table->string('behaviour_skils', 100)->nullable();
            $table->string('total_opening')->nullable();
            $table->string('recruiters')->nullable();
            $table->string('crm', 100)->nullable();
            $table->string('billable_value')->nullable();
            $table->string('total_billable', 200)->nullable();
            $table->string('joining_date', 100)->nullable();
            $table->string('resume_contact', 100)->nullable();
            $table->string('resume_type', 100)->nullable();
            $table->string('project_type', 200)->nullable();
            $table->string('publish_website', 200)->nullable();
            $table->longText('job_description_ckediter')->nullable();
            $table->string('file_attachment')->nullable();
            $table->string('openingfield_hiddendata', 100)->nullable();
            $table->string('multipul_nameposition_hidden', 100)->nullable();
            $table->integer('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->nullable()->default('N');
            $table->string('created_at', 100)->nullable();
            $table->string('updated_at', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
