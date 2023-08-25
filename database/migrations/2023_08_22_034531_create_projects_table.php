<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_code', 50)->unique();
            $table->string('project_name', 100);
            $table->unsignedBigInteger('project_owner_id');
            $table->text('description')->nullable();
            $table->enum('category', ['pengadaan', 'pengembangan', 'product setup'])->nullable();
            $table->timestamps();

            //Define foreign key constraint
            $table->foreign('project_owner_id')->references('id')->on('project_owners');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
