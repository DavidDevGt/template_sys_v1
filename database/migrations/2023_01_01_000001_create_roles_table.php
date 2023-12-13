<?php
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('roles', function ($table) {
    $table->increments('id');
    $table->string('nombre');
    $table->timestamps();
});
