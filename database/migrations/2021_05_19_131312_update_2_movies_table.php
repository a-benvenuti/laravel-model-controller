<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update2MoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('cover_image')->default('https://lh3.googleusercontent.com/proxy/fzdlpm5nX8RqmiBjfFaIgfh7Gch-M1Wnnfj1iaSSVa5RMYWJ4lO2DtZdyJknJwCWjgelKK1yBK3U9KlS0IAOIK5GEVZsVZ1HDf4y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('cover_image');
        });
    }
}
