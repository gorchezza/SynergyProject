<?php

use Faker\Factory as FakerFactory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            // $table->rememberToken();
            $table->id();
            $table->text('about')->nullable(true);
            $table->string('first_name');
            $table->string('second_name');
            $table->string('three_name');
            $table->string('id_passport');
            $table->string('issued');
            $table->string('register_date');
            $table->string('brith_date');
            $table->string('brith_place');
            $table->string('resident_place');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default(addslashes('storage\default\default.png'));
            $table->string('nickname')->default('userNickname'); 
            $table->string('user_id')->default('#' . mt_rand(1000, 10_000));
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
        Schema::dropIfExists('users');
    }
}
