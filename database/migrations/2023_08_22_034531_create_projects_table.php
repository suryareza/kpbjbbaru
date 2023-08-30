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
            $table->unsignedBigInteger('lead_subgroup_id'); // Kolom untuk lead subgroup
            $table->unsignedBigInteger('secondary_subgroup_id'); // Kolom untuk secondary subgroup
            $table->text('description')->nullable();
            $table->enum('category', ['pengadaan', 'pengembangan', 'product setup'])->nullable();
            $table->unsignedTinyInteger('priority')->nullable(); // 1-3, diubah dari enum ke unsignedTinyInteger
            $table->unsignedBigInteger('pic_id'); // Kolom untuk nama PIC project
            $table->unsignedBigInteger('secondary_pic_id'); // Kolom untuk secondary pic
            $table->date('target_date')->nullable();
            $table->enum('target_revisions', ['0','1','2','3','4'])->nullable(); // 0-4
            $table->enum('status', [
                'Todo', 'On-Progress', 'Testing', 'Waiting Deploy', 'Done', 'Cancel', 'Pending', 'Inisiasi'
            ])->default('Todo');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('project_owner_id')->references('id')->on('project_owners');
            $table->foreign('lead_subgroup_id')->references('id')->on('project_owners'); // Menghubungkan dengan project_owner_id
            $table->foreign('secondary_subgroup_id')->references('id')->on('project_owners'); // Menghubungkan dengan project_owner_id
            $table->foreign('pic_id')->references('id')->on('users');
            $table->foreign('secondary_pic_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
