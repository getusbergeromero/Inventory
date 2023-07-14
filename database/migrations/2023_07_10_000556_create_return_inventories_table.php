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
        Schema::create('return_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incoming_id')->constrained('incomings');
            $table->foreignId('deploy_id')->constrained('dep_inventories');
            $table->foreignId('personnel_id')->constrained('personnels');
            $table->string('status');
            $table->string('remarks');
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
        Schema::dropIfExists('return_inventories');
    }
};
