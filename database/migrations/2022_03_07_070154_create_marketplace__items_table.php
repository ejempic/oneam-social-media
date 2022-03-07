<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplaceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplace__items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketplace_id');
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->string('is_active');
            $table->timestamps();

            $table->index('marketplace_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketplace__items');
    }
}
