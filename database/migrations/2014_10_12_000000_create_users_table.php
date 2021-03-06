<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable()->default(null);
            $table->date('date_of_birth')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('cryptocurrency')->nullable()->default(null);
            $table->string('wallet_address')->nullable()->default(null);
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
