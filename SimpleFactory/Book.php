<?php

namespace DesignPatterns\SimpleFactory;

class Book implements Product {
    public function __construct(
        private readonly string $name,
        private readonly int    $price,
        private readonly string $description
    ) {
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getDescription(): string {
        return $this->description;
    }
}