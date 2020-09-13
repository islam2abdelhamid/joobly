<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName', 255);
            $table->text('description');
            $table->string('managerName', 255);
            $table->string('landTel', 255);
            $table->string('mobile', 255);
            $table->string('email', 255);
            $table->string('logo', 250)->default('companyLogo.png');
            $table->string('country', 250);
            $table->string('city', 250);
            $table->string('address', 250);
            $table->string('category', 250);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('companies');
    }
}
