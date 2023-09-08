<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_taches', function (Blueprint $table) {
            $table->id();
            $table->string('responsable');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('evenement_id')->constrained();
            $table->foreignId('tache_id')->constrained();
            $table->boolean('confirmed')->default(0);
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
        Schema::dropIfExists('assign_taches');
    }
}
