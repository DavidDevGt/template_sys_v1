<?php
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('usuarios', function ($table) {
    $table->increments('id');
    $table->string('nombre');
    $table->string('email')->unique();
    $table->string('password');
    $table->integer('rol_id')->unsigned()->nullable();
    $table->boolean('activo')->default(true);
    $table->dateTime('ultimo_login')->nullable();
    $table->foreign('rol_id')->references('id')->on('roles');
    $table->timestamps();
});
