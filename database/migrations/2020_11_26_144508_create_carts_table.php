<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('vendorName');
            $table->string('vendorLastname');
            $table->string('vendorLocation');
            $table->string('vendorCategory');
            $table->string('clientName');
            $table->string('clientLastname');
            $table->string('clientEmail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('clientPhone');
            $table->string('clientLocation');
            $table->string('projectName');
            $table->string('projectDesc');
            $table->bigInteger('projectCost');
            $table->bigInteger('projectInitialDeposit');
            $table->date('projectTimeline');
            $table->string('projectImage')->default('/images/avatar.png');
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
        Schema::dropIfExists('carts');
    }
}
