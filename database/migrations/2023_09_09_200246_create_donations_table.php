<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {

                $table->id();
                $table->string('DonationName');
                $table->longText('description');
                $table->mediumText('image');
                $table->Integer('amount_needed');
                $table->Integer('amount_donated')->default(0);
                $table->timestamps(); });
    }


    public function down()
    {
        Schema::dropIfExists('donations');
    }
};
