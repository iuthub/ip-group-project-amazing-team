<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('p_id');
            $table->text('Name');
            $table->text('Rtype');
            $table->text('Acr');
            $table->text('Status');
            $table->text('Group');
            $table->text('Type');
            $table->text('Desciption');
            $table->text('Stype')->nullable();
            $table->text('Oplan')->nullable();
            $table->text('Fplan')->nullable();
            $table->text('Bowner')->nullable();
            $table->text('ABowner')->nullable();
            $table->text('Oowner')->nullable();
            $table->text('AOowner')->nullable();
            $table->text('Innovation')->nullable();
            $table->text('AIowner')->nullable();
            $table->text('Hostedb')->nullable();
            $table->text('Region');
            $table->text('Owninc')->nullable();
            $table->text('Countryu');
            $table->date('Launchd');
            $table->date('Inactived')->nullable();
            $table->date('Retired')->nullable();
            $table->date('Canceld')->nullable();
            $table->text('help');
            $table->text('foto1')->nullable();
            $table->text('foto2')->nullable();
            $table->text('foto3')->nullable();
            $table->text('foto4')->nullable();
            $table->text('foto5')->nullable();
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
        Schema::dropIfExists('items');
    }
}
