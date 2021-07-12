<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprehensivetasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprehensivetasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('subject_id')->index();
            $table->text('subtheme')->nullable();
            $table->longText('description');
            $table->json('critarias');
            $table->json('keyquestions');
            $table->json('tips');
            $table->enum('created_by', ['author', 'teacher']);
            $table->unsignedBigInteger('user_id')->index();
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
        Schema::dropIfExists('comprehensivetasks');
    }
}
