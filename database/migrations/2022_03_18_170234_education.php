<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
        $table->id();
        $table->text('titre');
        $table->longText('sous_titre');
        $table->longText('description');
        $table->text('begin_date');
        $table->text('end_date');

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
        Schema::dropIfExists('education');   
    }
};
