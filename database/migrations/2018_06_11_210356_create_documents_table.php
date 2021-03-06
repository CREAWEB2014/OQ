<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('documentable_id')->unsigned();
            $table->string('documentable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
