<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('train_code', 10)->unique();
            $table->tinyInteger('coach_number');
            $table->string('departure_station');
            $table->timestamp('departure_date_time');
            $table->string('arrive_station');
            $table->dateTime('estimate_arrive_date_time')->nullable();
            $table->boolean('is_in_time')->nullable();
            $table->boolean('deleted')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
