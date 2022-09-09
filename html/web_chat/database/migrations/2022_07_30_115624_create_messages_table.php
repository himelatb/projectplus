<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('to')->unsigned()->nullable();
            $table->foreign('to')->references('id')->on('users');
            $table->bigInteger('from')->unsigned()->nullable();
            $table->foreign('from')->references('id')->on('users');
            $table->string('message', 1000);
            $table->enum('attachment_type', ['none', 'url', 'pdf', 'image'])->default('none');
            $table->string('attachment', 500)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
