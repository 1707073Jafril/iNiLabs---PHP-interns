<?php

public function up()
{
    Schema::create('to_dos', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->boolean('completed')->default(false);
        $table->timestamps();
    });
}

