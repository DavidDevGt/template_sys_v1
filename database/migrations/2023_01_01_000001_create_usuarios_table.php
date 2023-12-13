<?php
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('usuarios', function ($table) {
    $table->increments('id');
    $table->string('nombre');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});
