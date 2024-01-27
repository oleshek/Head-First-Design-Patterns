<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class Screen
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function up(): void
    {
        echo "$this->description going up\n";
    }

    public function down(): void
    {
        echo "$this->description going down\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
