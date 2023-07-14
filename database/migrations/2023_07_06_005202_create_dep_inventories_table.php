<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('acknowledgement_no');
            $table->foreignId('incoming_id')->constrained('incomings');
            $table->foreignId('personnel_id')->constrained('personnels');
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
        Schema::dropIfExists('dep_inventories');
    }
};
