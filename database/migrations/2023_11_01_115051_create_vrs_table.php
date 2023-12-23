<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('vrs',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->date('birth');
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('validation_code', 5)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
    public function down():void
    {
        Schema::dropIfExists('vrs');
    }
};