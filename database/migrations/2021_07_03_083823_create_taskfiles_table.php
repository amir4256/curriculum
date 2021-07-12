<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprehensivetask_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comprehensivetask_id')->index();
            $table->string('name')->nullable();
            $table->text('path')->nullable();
            $table->integer('file_type')->nullable();
            $table->longText('link')->nullable();
            $table->longText('text')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taskfiles');
    }
}
