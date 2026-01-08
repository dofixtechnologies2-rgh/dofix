<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary(); // notification ID
            $table->string('type'); // notification class name
            $table->uuidMorphs('notifiable'); // fixes UUID user ID issue
            $table->json('data');
            $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
