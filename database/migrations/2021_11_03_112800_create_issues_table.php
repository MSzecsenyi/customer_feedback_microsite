<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade')->primary();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade')->primary();
            $table->string('issuer_ip');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('description');
            $table->string('email');
            $table->string('location');
            $table->string('hashed_photo')->nullable();
            $table->string('original_photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
