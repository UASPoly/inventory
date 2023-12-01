<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_agreements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rent_request_id');
            $table->string('amount');
            $table->string('duration');
            $table->string('security_deposit');
            $table->string('start_at');
            $table->string('end_at');
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
        Schema::dropIfExists('lease_agreements');
    }
}
