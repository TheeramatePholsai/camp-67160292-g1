<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('pokedexes', function (Blueprint $table) {  // แก้ตรงนี้
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->string('species');
        $table->decimal('height', 8, 2);
        $table->decimal('weight', 8, 2);
        $table->decimal('hp', 8, 1);
        $table->decimal('attack', 8, 1);
        $table->decimal('defense', 8, 1);
        $table->string('image_url')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pokedexes');  // แก้ตรงนี้ด้วย
}
};
