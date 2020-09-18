<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            // $table->integer('company_id')->unsigned();
             $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->string('name', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('isActive', 255)->default(false);
            $table->string('logo', 255)->default('default.png')->nullable();
            $table->string('image', 255)->default('default.png')->nullable();
            $table->text('description')->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->text('about_company')->nullable();
            $table->string('contact_company_name')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('contact_social')->nullable();
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
        Schema::dropIfExists('services');
    }
}
