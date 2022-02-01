<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('unique')->unique();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('visitors')->default(0);
            $table->unsignedBigInteger('downloads')->default(0);
            $table->string('file');
            $table->dateTimeTz('expired_date')->nullable();
            $table->boolean('access')->default(true);
            $table->string('bin')->nullable();
            $table->enum('access_type', ['private', 'global', 'group']);
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
        Schema::dropIfExists('files');
    }
}
