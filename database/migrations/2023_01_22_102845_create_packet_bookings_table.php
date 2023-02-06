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
        Schema::create('packet_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('awb_np')->unique();
            $table->string('reference_no')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('client_id')->nullable();
            $table->string('csr_consignor')->nullable();
            $table->string('csr_contact_person')->nullable();
            $table->string('csr_address1')->nullable();
            $table->string('csr_address2')->nullable();
            $table->string('csr_')->nullable();
            $table->string('csr_')->nullable();
            $table->string('csr_')->nullable();
            $table->string('csr_')->nullable();
            $table->string('awb_np')->nullable();
            $table->string('awb_np')->nullable();
            $table->string('awb_np')->nullable();
            $table->string('awb_np')->nullable();

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
        Schema::dropIfExists('packet_bookings');
    }
};
