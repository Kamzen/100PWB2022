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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('s_code');
            $table->string('s_nb');
            $table->string('s_name');
            $table->string('s_category');
            $table->string('s_contact');
            $table->string('s_email');
            $table->string('s_phone');
            $table->string('s_vat');
            $table->string('s_register');
            $table->decimal('s_settlement',10,2);
            $table->string('s_discount');
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
        Schema::dropIfExists('suppliers');
    }
};
