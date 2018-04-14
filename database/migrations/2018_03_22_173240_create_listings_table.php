<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('category')->default('null');
            $table->string('keywords');
            $table->string('city');
            $table->string('address');
            $table->string('state');
            $table->string('zip_code');
            $table->string('upload_file');
            $table->longText('description');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('email');
            $table->string('fb')->nullable();
            $table->string('twitr')->nullable();
            $table->string('google')->nullable();
            $table->string('elevator')->nullable();
            $table->string('workspace')->nullable();
            $table->string('booking')->nullable();
            $table->string('internet')->nullable();
            $table->string('parking')->nullable();
            $table->string('street')->nullable();
            $table->string('smoking')->nullable();
            $table->string('events')->nullable();
            $table->string('monday_op')->nullable();
            $table->string('monday_cl')->nullable();
            $table->string('tuesday_op')->nullable();
            $table->string('tuesday_cl')->nullable();
            $table->string('wednesday_op')->nullable();
            $table->string('wednesday_cl')->nullable();
            $table->string('thursday_op')->nullable();
            $table->string('thursday_cl')->nullable();
            $table->string('friday_op')->nullable();
            $table->string('friday_cl')->nullable();
            $table->string('saturday_op')->nullable();
            $table->string('saturday_cl')->nullable();
            $table->string('sunday_op')->nullable();
            $table->string('sunday_cl')->nullable();
            $table->string('pricing_product')->nullable();
            $table->string('pricing_des')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
