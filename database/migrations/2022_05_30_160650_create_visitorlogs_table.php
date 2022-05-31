<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitorlogs', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_name')->nullable();
            $table->string('visitor_address')->nullable();
            $table->string('visitor_phone_number')->nullable();
            $table->string('staff_to_see')->nullable();
            $table->integer('tag_number')->nullable();
            $table->string('signature')->nullable();
            $table->enum('purpose', ['Personal', 'Official', 'Meeting', 'Others'])->default('Official')->nullable();
            $table->date('visitor_time_out')->nullable();
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
        Schema::dropIfExists('visitorlogs');
    }
}
